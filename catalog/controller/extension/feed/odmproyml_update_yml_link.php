<?php
class ControllerExtensionFeedOdmproymlUpdateYMLLink extends Controller {
        
        public function index() {
            
            $this->load->language('extension/module/yml_ocext_dmpro');
            
            $token = '';
            
            if(isset($this->request->get['token'])){
                
                $token = trim($this->request->get['token']);
                
            }else{
                
                exit($this->language->get('error_no_token'));
                
            }
            
            if($this->config->get('odmproyml_update_yml_link') && $this->config->get('odmproyml_tamplate_data_yml')){
                
                $update_settings = $this->config->get('odmproyml_update_yml_link');
                
                $update_setting = array();
                
                foreach ($update_settings as $setting) {
                    
                    if($setting['token']==$token){
                        
                        $update_setting = $setting;
                        
                        if(!$update_setting['status']){
                            
                            exit($this->language->get('error_status'));
                            
                        }
                        
                        $tamplates_data = $this->config->get('odmproyml_tamplate_data_yml');
                        
                        $template_data = array();
                        
                        if(isset($tamplates_data[$update_setting['tamplate_data_id']])){
                            
                            $template_data = $tamplates_data[$update_setting['tamplate_data_id']];
                            
                        }
                        
                    }
                    
                }
                
                if(!$update_setting){
                    
                    exit($this->language->get('error_no_token'));
                    
                }
                
                if(!$template_data){
                    
                    exit($this->language->get('error_template_data'));
                    
                }
                
            }else{
                
                exit($this->language->get('error_no_odmproyml_update_yml_link'));
                
            }
            
            $this->request->post['odmproyml_tamplate_data_yml'] = $template_data;
            
            if(!isset($this->request->get['start'])){
                $this->request->get['start'] = $template_data['start'];
            }
            
            //$this->startImport();
            
        }
        
        private function checkCURL(){
            
            if(function_exists('curl_version')){
                
                return TRUE;
                
            }else{
                
                return FALSE;
                
            }
        }
        
        public function startImport() {
            
            
            $this->load->language('extension/module/yml_ocext_dmpro');
            
            if(!isset($this->request->get['token'])){
                
                exit($this->language->get('error_no_token'));
                
            }
            
            
            $format_data = $this->request->post['odmproyml_tamplate_data_yml']['format_data'];
            
            $odmproyml_tamplate_data_yml = $this->request->post['odmproyml_tamplate_data_yml'];
            
            $import_data_types = array();
            
            $attribute_or_filter = '';
            
            if($format_data=='csv'){
                
                $this->load->model('tool/yml_ocext_dmpro');
                
                $this->load->language('extension/module/yml_ocext_dmpro');
                
            }
            
            foreach ($odmproyml_tamplate_data_yml['type_data'] as $field => $type_data) {
                
                $field = trim($field);
                
                if($type_data && $field){
                    
                    $import_data_types[$field]['type_data'] = $type_data;
                    
                    if($type_data=='attribute' || $type_data=='filter'){
                        
                        $attribute_or_filter = $type_data;
                        
                    }
                    
                    if(isset($odmproyml_tamplate_data_yml['type_data_column'][$field]) && $odmproyml_tamplate_data_yml['type_data_column'][$field]){
                        
                        $type_data_column = $odmproyml_tamplate_data_yml['type_data_column'][$field];
                        
                        $import_data_types[$field]['type_data_column'] = $type_data_column;
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_image'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_image'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_image_upload'] = 1;
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_image_upload'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_price_rate'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_price_rate'][$field][$type_data_column]){
                            
                            $price_rate = $this->getFloat($odmproyml_tamplate_data_yml['type_data_column_price_rate'][$field][$type_data_column]);
                            
                            $import_data_types[$field]['type_data_column_price_rate'] = $price_rate;
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_price_rate'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_price_delta'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_price_delta'][$field][$type_data_column]){
                            
                            $price_delta = $this->getFloat($odmproyml_tamplate_data_yml['type_data_column_price_delta'][$field][$type_data_column]);
                            
                            $import_data_types[$field]['type_data_column_price_delta'] = $price_delta;
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_price_delta'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_price_around'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_price_around'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_price_around'] = 1;
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_price_around'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_quantity_request'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_quantity_request'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_quantity_request'] = $odmproyml_tamplate_data_yml['type_data_column_quantity_request'][$field][$type_data_column];
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_quantity_request'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_quantity_update'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_quantity_update'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_quantity_update'] = (int)$odmproyml_tamplate_data_yml['type_data_column_quantity_update'][$field][$type_data_column];
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_quantity_update'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_request'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_request'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_request'] = 1;
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_request'] = 0;
                            
                        }
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_delimiter'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_delimiter'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_delimiter'] = trim($odmproyml_tamplate_data_yml['type_data_column_delimiter'][$field][$type_data_column]);
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_delimiter'] = '';
                            
                        }
                        /*
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_attribute_values_delimiter'][$field][$type_data_column]) && $odmproyml_tamplate_data_yml['type_data_column_attribute_values_delimiter'][$field][$type_data_column]){
                            
                            $import_data_types[$field]['type_data_column_attribute_values_delimiter'] = trim($odmproyml_tamplate_data_yml['type_data_column_attribute_values_delimiter'][$field][$type_data_column]);
                            
                        }else{
                            
                            $import_data_types[$field]['type_data_column_attribute_values_delimiter'] = '';
                            
                        }
                         * 
                         */
                        
                        $import_data_types[$field]['type_data_column_group_identificator'] = array();
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_group_identificator']) && $odmproyml_tamplate_data_yml['type_data_column_group_identificator']){
                            
                            foreach ($odmproyml_tamplate_data_yml['type_data_column_group_identificator'] as $type_identificator => $identificator) {
                                
                                if(isset($identificator[$field][$type_data_column]) && $identificator[$field][$type_data_column]){
                                    
                                    $type_identificator_parts = explode('_', $type_identificator);
                                    
                                    if(end($type_identificator_parts)=='field'){
                                        
                                        $type_identificator = 'field';
                                        
                                    }
                                    
                                    $import_data_types[$field]['type_data_column_group_identificator']['type_group_identificator'] = $type_identificator;
                                    
                                    $import_data_types[$field]['type_data_column_group_identificator']['value_group_identificator'] = $identificator[$field][$type_data_column];
                                    
                                }
                                
                            }
                            
                        }
                        
                        $column = explode('___', $type_data_column);
                        
                        $import_data_types[$field]['column'] = $column[1];
                        
                        $check_column = $this->model_tool_yml_ocext_dmpro->getColumnIntoAbstractField($column[1],$column[0]);
                        
                        $table_descriptiom = '';
                        
                        //для имен нужно создать таблицу _description
                        if($check_column=='name' && ($column[0]=='attribute' || $column[0]=='filter')){
                            
                            $table_descriptiom = '_description';
                            
                        }
                        
                        $import_data_types[$field]['table_to_db'] = $column[0].$table_descriptiom;
                        
                        $identificator = array();
                        
                        if(isset($odmproyml_tamplate_data_yml['type_data_column_identificator'])){
                            
                            $identificator = $odmproyml_tamplate_data_yml['type_data_column_identificator'];
                            
                        }
                        
                        if(isset($identificator[$field][$type_data_column]) && $identificator[$field][$type_data_column]){
                            
                            $import_data_types[$field]['identificator'][$type_data] = $identificator[$field][$type_data_column];
                            
                        }else{
                            $import_data_types[$field]['identificator'][$type_data] = 0;
                        }
                        
                        $import_data_types[$field]['type_change'] = $odmproyml_tamplate_data_yml['type_change'];
                        
                    }else{
                        unset($import_data_types[$field]);
                    }
                }
            }
            
            $json['error'] = '';
            
            // проверка наличие поля с идентификатором, если данные идут для обновления
            if( ($odmproyml_tamplate_data_yml['type_change']=='only_update_data' || $odmproyml_tamplate_data_yml['type_change']=='update_data') ){
                
                $identificators = array();
                
                $types_data = array();
                
                foreach ($import_data_types as $field => $ipmort) {
                    
                    if($ipmort['identificator'][ $ipmort['type_data'] ] && $ipmort['identificator'][ $ipmort['type_data'] ]){
                        
                        if(!isset($identificator[ $ipmort['type_data']  ])){
                            
                            $identificators[ $ipmort['type_data']  ] = TRUE;
                            
                        }
                        
                    }
                    
                    $types_data[ $ipmort['type_data'] ] = $ipmort['type_data'];
                    
                }
                
                foreach ($types_data as $type_data) {
                    
                    if(!isset($identificators[ $type_data ])){
                        
                        $json['error'] .= '<p>'.sprintf($this->language->get('entry_identificator_empty'),'<b>'.$this->language->get('text_type_data_'.$type_data).'</b>',$this->language->get('entry_type_change_new_data')).'</p>'; 
                        
                    }
                }
                
            }
            
            // проверка обязательных полей при добавлении данных, для определенного типа данных
            if( $odmproyml_tamplate_data_yml['type_change']=='new_data' ){
                
                $types_data = array();
                
                foreach ($import_data_types as $field => $ipmort) {
                    
                    //собираю все типы данных, чтобы потом проверить для всех ли есть $required_fields 
                    $types_data[$ipmort['type_data']] = $ipmort['type_data'];
                    
                    if($ipmort['type_data']=='category'){
                        
                        //создаю, если еще нет
                        if(!isset($required_fields)){
                            
                            $required_fields[$ipmort['type_data']] = FALSE;
                            
                        }
                        //для этого типа обязательные название или путь с названием
                        if($ipmort['column']=='name' || $ipmort['column']=='category_whis_path'){
                            
                            $required_fields[$ipmort['type_data']] = TRUE;
                            
                        }
                        
                    }
                    
                }
                
                foreach ($types_data as $type_data) {
                    
                    if(isset($required_fields[$type_data]) && !$required_fields[$type_data]){
                        
                        $json['error'] .= '<p>'.$this->language->get('entry_'.$type_data.'_required_empty').'</p>'; 
                        
                    }
                }
                
            }
            
            //проверка импорта фильтров и атрибутов на наличие связанной группы
            if($attribute_or_filter){
                
                $error = '<p>'.sprintf($this->language->get('entry_attribute_or_filter_group_empty'),'<b>'.$this->language->get('text_type_data_'.$attribute_or_filter).'</b>').'</p>'; 
                
                foreach ($import_data_types as $field => $ipmort) {
                    
                    if(isset($ipmort['type_data_column_group_identificator']) && $ipmort['type_data_column_group_identificator']){
                        
                        $error = ""; 
                        
                    }
                    
                }
                
                $json['error'] .= $error;
                
            }
            
            //проверка curl, если где-то требуется загрузка картинок
            $check_curl = FALSE;
            
            foreach ($import_data_types as $field => $ipmort) {
                
                if($ipmort['type_data_column_image_upload']){
                    
                    $check_curl = TRUE;
                    
                }
                
            }
            
            if($check_curl){
                
                $check_curl = $this->checkCURL();
                
                if(!$check_curl){
                    
                    $json['error'] .= '<p>'.$this->language->get('entry_curl_exits').'</p>'; 
                    
                }
                
            }
            
            //подымаем файл
            if($odmproyml_tamplate_data_yml['file_url']){
                
                $file = $this->model_tool_yml_ocext_dmpro->getFileByURL($odmproyml_tamplate_data_yml['file_url']);
                
            }else{
                
                $file = $this->model_tool_yml_ocext_dmpro->getFileByFileName($odmproyml_tamplate_data_yml['file_upload']);
                
            }
            
            if(!$file){
                
                $json['error'] .= '<p>'.$this->language->get('entry_file_exits').'</p>'; 
                
            }
            
            $start = $this->request->get['start'];
            
            $limit = $this->request->post['odmproyml_tamplate_data_yml']['limit'];
            
            $json['success'] = '';
            
            $import_result['count_rows'] = 0;
            
            if($format_data=='csv' && !$json['error']){
                
                //+1 сдвигаемся с заголовков полей
                $import_result = $this->model_tool_yml_ocext_dmpro->getCsvRows($file,$start+1,$limit,$odmproyml_tamplate_data_yml);
                
                $log = $this->model_tool_yml_ocext_dmpro->importCSV($odmproyml_tamplate_data_yml,$import_data_types,$import_result);
                
            }
            
            $json['total'] = $import_result['count_rows'];
            
            if(!$json['error'] && (($start+$limit)>$import_result['count_rows'] && $import_result['count_rows']>0)){
                
                $json['success'] = $this->language->get('import_success_accomplished');
                
            }  elseif (!$json['error'] && $import_result['count_rows']>0 && ($start+$limit)<=$import_result['count_rows']) {
                
                $this->response->redirect($this->url->link('extension/feed/odmproyml_update_yml_link', 'start='.($start+$limit).'&token=' . $this->request->get['token']));
                
            }
            
            if($json['error']){
                echo $json['error'];
            }elseif ($json['success']) {
                echo $json['success'];
            }
            exit();
        }
        
        private function getFloat($string){
            
            $find = array('-',',',' ');
            
            $replace = array('.','.','');
            
            $result = (float)str_replace($find, $replace, $string);
            
            return $result;
        }
        
        public function getAttributeOrFilterGroups($language_id,$type_data_column) {
            
            $this->load->language('extension/module/yml_ocext_dmpro');
            
            if(!isset($this->request->get['token'])){
                
                exit($this->language->get('error_no_token'));
                
            }
            
            if($type_data_column=='attribute_name'){
                
                $table = 'attribute_group_description';
                
            }
            
            if($type_data_column=='filter_name'){
                
                $table = 'filter_group_description';
                
            }
            
            if(!$language_id){
                
                $language_id = (int)$this->config->get('config_language_id');
                
            }
            
            $sql = "SELECT * FROM " . DB_PREFIX . $table." WHERE language_id = '" . $language_id . "' ";

            $query = $this->db->query($sql);

            return $query->rows;
	}
        
        public function getAttributes($data = array('start'=>0,'limit'=>10000)) {
            
            $this->load->language('extension/module/yml_ocext_dmpro');
            
            if(!isset($this->request->get['token'])){
                
                exit($this->language->get('error_no_token'));
                
            }
            
		$sql = "SELECT *, (SELECT agd.name FROM " . DB_PREFIX . "attribute_group_description agd WHERE agd.attribute_group_id = a.attribute_group_id AND agd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS attribute_group_name FROM " . DB_PREFIX . "attribute a LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";
                
                $sql .= " ORDER BY attribute_group_name, ad.name";
                
		$sql .= " ASC";
                
                $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
                
		$query = $this->db->query($sql);
                
                $result = array();
                
                if($query->rows){
                    
                    foreach ($query->rows as $value) {
                        
                        $result[$value['attribute_group_id'].'_'.$value['attribute_id']] = $value;
                        
                    }
                }
                
                ksort($result);
                
		return $result;
	}
        
        protected function curl_get_contents($url) {
            
            $this->load->language('extension/module/yml_ocext_dmpro');
            
            if(!isset($this->request->get['token'])){
                
                exit($this->language->get('error_no_token'));
                
            }
            
            if(function_exists('curl_version')){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                $output = curl_exec($ch);
                curl_close($ch);
                return $output;
            }else{
                $output['ru'] = 'Проверка версии недоступна. Включите php расширение - CURL на Вашем хостинге';
                $output['en'] = 'You can not check the version. Enable php extension - CURL on your hosting';
                $language_code = $this->config->get( 'config_admin_language' );
                if(isset($output[$language_code])){
                    return $output[$language_code];
                }else{
                    return $output['en'];
                }
            }
	}
        
        
}
?>
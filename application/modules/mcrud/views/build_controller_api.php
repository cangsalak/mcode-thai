{php_open_tag} defined('BASEPATH') OR exit('No direct script access allowed');
  <?php
  $show_in_table = $this->mcrud_build->showInTable();
  $show_in_filter = $this->mcrud_build->showInFilter();
  $show_in_view = $this->mcrud_build->showInView();
  $show_in_add = $this->mcrud_build->showInAdd();
  $show_in_update = $this->mcrud_build->showInUpdate();
  $cek_relation = $this->mcrud_build->checkoptionRelation();
  ?>
  /*| --------------------------------------------------------------------------*/
  /*| dev : <?=$this->config->item('author')?>  */
  /*| version : <?=$this->config->item('version')?> */
  /*| facebook : <?=$this->config->item('facebook')?> */
  /*| fanspage : <?=$this->config->item('fanspage')?> */
  /*| website : <?=$this->config->item('website')?> */
  /*| youtube : <?=$this->config->item('youtube')?> */
  /*| --------------------------------------------------------------------------*/
  /*| Generate By <?=$this->config->item('app')?> สร้างเมื่อ <?=date('d/m/Y H:i')?>*/
  /*| Please DO NOT modify this information*/

require(APPPATH.'/libraries/REST_Controller.php');

    class {controller} extends REST_Controller{

    private $title = "{title}";


    public function __construct()
    {
      $config = array(
        'title' => $this->title,
      );
      parent::__construct($config);
      $this->load->model("{controller}_model","model");
    }

    function <?=strtolower($controller)?>_get()
    {
      $this->is_allowed('<?=strtolower($controller)?>_list');
      $r = $this->model->get_datatables();
      $this->response($r); 
    }

    function <?=strtolower($controller)?>_put()
    {
      if($this->input->is_ajax_request()){
        if (!is_allowed('<?=strtolower($controller)?>_put')) {
          show_error("Access Permission", 403,'403::Access Not Permission');
          exit();
        }

        $json = array('success' => false);
    <?php foreach ($show_in_update as $field): ?>
    <?php if (formType($field) != "timestamp"): ?>
        $this->form_validation->set_rules("<?=$field?>","* <?=label($field)?>","trim|xss_clean<?=showRules($field)?>");
    <?php endif; ?>
    <?php endforeach; ?>
        $this->form_validation->set_error_delimiters('<i class="error text-danger" style="font-size:11px">','</i>');

        if ($this->form_validation->run()) {
    <?php foreach ($show_in_update AS $field): ?>
    <?php if (formType($field) == "date"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "time"): ?>
          $save_data['<?=$field?>'] = date("H:i",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "datetime"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d H:i",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "timestamp"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d H:i");
    <?php elseif(formType($field) == "upload_image"): ?>
          $save_data['<?=$field?>'] = $this->imageCopy($this->input->post('<?=$field?>',true),$_POST['file-dir-<?=$field?>']);
    <?php else: ?>
          $save_data['<?=$field?>'] = $this->input->post('<?=$field?>',true);
    <?php endif; ?>
    <?php endforeach; ?>

          $save = $this->model->change(dec_url($this->uri->segment(3)), $save_data);

          set_message("success",cclang("notif_update"));

          $json['redirect'] = url("<?=strtolower($controller)?>");
          $json['success'] = true;
        }else {
          foreach ($_POST as $key => $value) {
            $json['alert'][$key] = form_error($key);
          }
        }

        $this->response($json);
    }

    function <?=strtolower($controller)?>_post()
    {
      if($this->input->is_ajax_request()){
        if (!is_allowed('<?=strtolower($controller)?>_post')) {
          show_error("Access Permission", 403,'403::Access Not Permission');
          exit();
        }

        $json = array('success' => false);
    <?php foreach ($show_in_add as $field): ?>
    <?php if (formType($field) != "timestamp"): ?>
        $this->form_validation->set_rules("<?=$field?>","* <?=label($field)?>","trim|xss_clean<?=showRules($field)?>");
    <?php endif; ?>
    <?php endforeach; ?>
        $this->form_validation->set_error_delimiters('<i class="error text-danger" style="font-size:11px">','</i>');

        if ($this->form_validation->run()) {
    <?php foreach ($show_in_add AS $field): ?>
    <?php if (formType($field) == "date"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "time"): ?>
          $save_data['<?=$field?>'] = date("H:i",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "datetime"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d H:i",  strtotime($this->input->post('<?=$field?>', true)));
    <?php elseif(formType($field) == "timestamp"): ?>
          $save_data['<?=$field?>'] = date("Y-m-d H:i");
    <?php elseif(formType($field) == "upload_image"): ?>
          $save_data['<?=$field?>'] = $this->imageCopy($this->input->post('<?=$field?>',true),$_POST['file-dir-<?=$field?>']);
    <?php else: ?>
          $save_data['<?=$field?>'] = $this->input->post('<?=$field?>',true);
    <?php endif; ?>
    <?php endforeach; ?>

          $this->model->insert($save_data);

          set_message("success",cclang("notif_save"));
          $json['redirect'] = url("<?=strtolower($controller)?>");
          $json['success'] = true;
        }else {
          foreach ($_POST as $key => $value) {
            $json['alert'][$key] = form_error($key);
          }
        }

        $this->response($json);
      }
    }

    function <?=strtolower($controller)?>_delete()
    {
      if ($this->input->is_ajax_request()) {
        if (!is_allowed('<?=strtolower($controller)?>_delete')) {
          return $this->response([
            'type_msg' => "error",
            'msg' => "do not have permission to access"
          ]);
        }

          $this->model->remove(dec_url($this->uri->segment(3)));
          $json['type_msg'] = "success";
          $json['msg'] = cclang("notif_delete");


        return $this->response($json);
      }
    }

  }
}

/* End of file {controller}.php */
/* Location: ./application/modules/<?=strtolower($controller)?>/controllers/api/{controller}.php */

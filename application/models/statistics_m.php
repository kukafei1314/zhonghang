<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*点击量action
 * @author mm
 */
class Statistics_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
	   $this->load->model(array('article_type_m','article_list_model','upload_m'));
   }
   
   public function update_click($tid,$aid)
   {
       $this->db->where('aid',$aid);
	   $this->db->where('tid',$tid);
       $query = $this->db->get('zh_statistics');
	   $data['tid'] = $tid;
	   $data['aid'] = $aid;
       if($query->num_rows == 0) {
		   $data['click_amount'] = 1;
		   $this->db->insert('zh_statistics',$data);
	   } else {
		   foreach($query->result_array() as $row) {
			   $data['click_amount'] = $row['click_amount']+1;
		   }
		   $this->db->where('aid',$aid);
	  	   $this->db->where('tid',$tid);
		   $this->db->update('zh_statistics',$data);
	   }
	   return TRUE;
   }
 
 	public function get_upload()
	{
		$this->db->where_in('tid',array('27','28','29'));
		$this->db->order_by('click_amount');
		$query = $this->db->get('zh_statistics',4,0);
		$i = 0;
		foreach($query->result_array() as $row) {
			$result[$i] = $this->upload_m->getby_uid($row['aid']);
			$result[$i]['type_name'] = $this->article_type_m->get_name($row['tid']);
			$result[$i]['add_date']  = date('Y-m-d',$result[$i]['add_time']);
			$result[$i]['click_amount'] = $row['click_amount'];
			$i++;
		}
		return $result;
	}
	
	public function get_articles()
	{
		$this->db->where_not_in('tid',array('27','28','29'));
		$this->db->order_by('click_amount');
		$query = $this->db->get('zh_statistics',4,0);
		$i = 0;
		foreach($query->result_array() as $row) {
			$result[$i] = $this->article_list_model->get_article($row['aid']);
			$result[$i]['type_name'] = $this->article_type_m->get_name($row['tid']);
			$result[$i]['add_date']  = date('Y-m-d',$result[$i]['add_time']);
			$result[$i]['click_amount'] = $row['click_amount'];
			$i++;
		}
		return $result;
	}
	
	public function get_articles_num()
	{
		return $this->db->count_all_results('zh_articles');
	}
	public function get_upload_all()
	{
		return $this->db->count_all_results('zh_uploads');
	}
	public function get_click_count()
	{
		$this->db->select_sum('click_amount');
		$query = $this->db->get('zh_statistics');
		foreach($query->result_array() as $row) {
			$result = $row['click_amount'];
		}
		return $result;
	}
}
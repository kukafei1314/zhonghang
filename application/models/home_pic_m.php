<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author mm
 */
class Home_pic_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->library('pagination');
   }
   
   public function home_pic_list()
   {
       $sql = "SELECT * FROM `zh_home_pic` ORDER BY `order` ASC";
       $query = $this->db->query($sql);
       return $query->result_array();
   }
   
   public function update_pic($pid,$pic)
   {
   		$this->db->where('pid',$pid);
   		$this->db->update('zh_home_pic',$pic);
   		return TRUE;
   }
   
   public function get_url($pid)
   {
	   $this->db->where('pid',$pid);
	   $this->db->select('url');
	   $query = $this->db->get('zh_home_pic');
	   foreach($query->result_array() as $row) {
		   $result = $row['url'];
	   }
	   return $result;
   }
}
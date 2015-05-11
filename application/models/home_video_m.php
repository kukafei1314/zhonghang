<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author lizzy
 */
class Home_video_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->library('pagination');
   }
   
   public function home_video_list()
   {
       $sql = "SELECT * FROM `zh_home_video` ORDER BY `id` ASC";
       $query = $this->db->query($sql);
       return $query->result_array();
   }
   
   public function update_video($id,$pic)
   {
   		$this->db->where('id',$id);
   		$this->db->update('zh_home_video',$pic);
   		return TRUE;
   }
}
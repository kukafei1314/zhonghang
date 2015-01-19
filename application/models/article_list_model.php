<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author LZZ
 */
class Article_list_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->model('article_list_m');
   }
   
   public function query_article($tid,$limit, $offset = 0)
   {
		$this->db->where('type',$tid);
		$this->db->order_by('add_time','desc');
       $query = $this->db->get('zh_articles',$limit, $offset);
       return $query->result_array();
   }
   
   public function query_article_num($tid)
   {
   	$this->db->where('type',$tid);
   	$query = $this->db->get('zh_articles');
   	return $query->num_rows();
   }
   /**
    * 图片新闻读取
    * @param unknown $article
    */
   public function pic_list() {
   		$this->db->where('type',9);
   		$this->db->limit(4,0);
   		$this->db->order_by('add_time','desc');
   		$query = $this->db->get('zh_articles');
   		$i = 0;
   		foreach ($query->result_array() as $row) {
   			$result[$i]['aid'] = $row['aid'];
   			$result[$i]['title'] = $row['title'];
   			$result[$i]['path'] = $this->article_list_m->get_pic($row['aid']);
   			$i++;
   		}
   		return $result;
   }
   
     /**
    * 首页大图
    */
   public function pic_home() {
   		$this->db->order_by('order','asc');
   		$query = $this->db->get('zh_home_pic');
   		return $query->result_array();
   }
   public function add_article($article)
   {
       $this->db->insert('zh_articles', $article);
   }
   
   public function delete_article($aid)
   {
       $this->db->where('aid',$aid);
       if($this->db->delete('zh_articles') == FALSE)
           return FALSE;
       else
           return TRUE;
   }
   
   public function get_article($aid)
   {
       $sql = "SELECT * FROM `zh_articles` WHERE `aid` = $aid";
       $query = $this->db->query($sql);
       return $query->row_array();
   }
   
   public function update_article($article)
   {
       $this->db->where('aid',$article['aid']);
       $this->db->update('zh_articles',$article);
   }
}

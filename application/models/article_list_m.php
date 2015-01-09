<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author LZZ
 */
class Article_list_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->library('pagination');
   }
   
   public function query_article($pid,$tid,$start_page)
   {
       $sql = "SELECT * FROM `zh_articles` WHERE `type` = $tid ORDER BY `aid` ASC LIMIT $start_page , 10";
       $query = $this->db->query($sql);
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
   
   public function search_article($type,$search)
   {
       $sql = "SELECT * FROM `zh_articles` WHERE `type` = $type AND `title` LIKE '%".$search."%' ";
       $query = $this->db->query($sql);
       return $query->result_array();
   }
   
   public function num_articles($type)
   {
       $sql = "SELECT COUNT(*) FROM `zh_articles` WHERE `type` = $type";
       $query = $this->db->query($sql);
       return $query->row_array()['COUNT(*)'];
   }
   
   public function pageConfig($temp)
   {
       $config['base_url'] = $temp['base_url'];
       $config['total_rows'] = $temp['total_rows'];
       $config['per_page'] = 10;
       $config['first_link'] = "首页";
       $config['last_link'] = "末页";
       $config['use_page_numbers'] = TRUE;
       $config['cur_tag_open'] = '<b>';
       $config['cur_tag_close'] = '</b>';
       $this->pagination->initialize($config);
   }
}

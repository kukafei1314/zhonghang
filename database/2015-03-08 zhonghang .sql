-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-03-08 10:49:32
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zhonghang`
--

-- --------------------------------------------------------

--
-- 表的结构 `zh_about`
--

CREATE TABLE IF NOT EXISTS `zh_about` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `add_date` date DEFAULT NULL,
  `add_time` time DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `zh_about`
--

INSERT INTO `zh_about` (`aid`, `title`, `content`, `add_date`, `add_time`, `add_user`) VALUES
(1, '公司简介', '<p class="pstyle" style="text-indent: 2em; margin-top: 1em; margin-bottom: 1em; line-height: 2em; color: rgb(0, 85, 162); font-family: 宋体; font-size: 12px; white-space: normal;"></p><p class="pstyle" style="text-indent: 2em; margin-top: 1em; margin-bottom: 1em; line-height: 2em; color: rgb(0, 85, 162); font-family: 宋体; font-size: 12px; white-space: normal;">北京中航泰达科技有限公司是专业发展脱硫环保事业的高科技企业。 公司成立于2001年，公司成立之初就以保护环境造福人类为己任，以航天科技创新和科学管理为手段，依托人才战略，立足自主科研攻关，精心打造中航泰达航天科技环保的品牌。以良好的信誉，先进技术、精品工程奉献于社会，立志成为推动行业发展的国际化环保科技企业。</p><p class="pstyle" style="text-indent: 2em; margin-top: 1em; margin-bottom: 1em; line-height: 2em; color: rgb(0, 85, 162); font-family: 宋体; font-size: 12px; white-space: normal;">公司以“木石信念、云水情怀”的企业精神和“研发致用、自主创新”的发展理念为指导，依托航天技术独创开发了两种湿法脱硫技术：气喷旋冲法、旋涡撞击法。采用了石灰石/石膏法脱硫工艺、氧化镁脱硫工艺、氢氧化钠脱硫工艺等多种脱硫工艺，并在众多工程化项目中取得了满意的效果，获得业界的好评。公司专项航天环保脱硫技术人员从1992年至今一直与宝钢保持着良好的合作关系和技术交流，并于2006年与宝钢共同建设了大型热态试验装置，成功研发了拥有自主知识产权的烧结烟气脱硫技术--气喷旋冲石灰石/石膏法，脱硫率高达98%，解决了我国冶金行业烧结烟气脱硫技术的难题，填补了国内的空白，受到了同行业高度重视并已在宝钢工程化项目中实施。</p><p class="pstyle" style="text-indent: 2em; margin-top: 1em; margin-bottom: 1em; line-height: 2em; color: rgb(0, 85, 162); font-family: 宋体; font-size: 12px; white-space: normal;">目前公司的业务涵盖环境工程的技术开发、设计；销售烟气脱硫装置；施工总承包；专业承包。承接新建、改造烟气脱硫工程项目。在科研、施工的实践中造就了一支既有深厚理论基础，又有丰富实践经验的空气净化工程工艺、设备制造、工程安装队伍。与宝钢等多家企业保持良好的战略合作关系。继往开来，公司将不断创新，勇攀行业高峰为中国及至世界环保事业发展做出更大的贡献。</p><p><br/></p>', '2015-03-04', '838:59:59', 'admin'),
(2, '董事长致辞', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">白岩松：第一个关键词是“大珠小珠落玉盘”，也就是常说的“老虎苍蝇一起打”。这是社会格外关注、几乎周周都能见到的。但这只是表象，第二个关键词“刮骨疗毒”更为关键。表面上看“刮骨疗毒”暴露了我们很多问题，但更多的人很快就看到了，我们没有讳疾忌医，我们是真心去治病的，是希望有个健康肌体的。2014年结束了，“刮骨疗毒”不会停，还会延续，但它一定是个阶段，因为在治疗之后，慢慢要回到保健、预防，回到健康生活方式。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">接下来两个关键词是未来更深层次我非常看重的东西。一个是“祛除社会和人心中的雾霾”，恢复一种健康蓝。我们“打虎拍蝇”、“刮骨疗毒”，目的是什么？2014年我们都在谈论APEC蓝，谈论PM2.5，你不觉得在“打虎拍蝇”过程中，社会肌体、人心当中的雾霾比现实更严重吗？清理它不会比清理大气污染简单。所以我觉得，八项规定也好、反腐败也好，归根到底是要治理社会和人心中的雾霾，慢慢让社会风气和人心内部云淡风轻。最后一个关键词是“信心”，云淡风轻还不是终极目标，终极目标是由于云淡风轻人们有了生活和面向明天的信心。有信心，社会、国家就会良性运转，你就不会担心未来。支撑一个人向前走的是希望，希望建立在信心的基础上。与关注这个案子那个案子相比，我更看重我们会用多长时间建立信心。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);"><strong>记者：这一年，随着作风建设的深入，您和身边人的工作、生活有了哪些变化，印象最深的几件事是什么？</strong></p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">白岩松：我夫人是江苏人，<strong>去年11月的时候，我们一家回江苏，晚上在饭店吃饭，第一次点了螃蟹。以前这么多年我们家下馆子从来没点过螃蟹，太贵了，贵得离谱。现在呢，4两的螃蟹一只才38元。</strong><strong>桌上，老人都在聊，“反腐让价格变成老百姓能接受的了”。</strong>这“38元”让我印象非常深，我猜想，这两年八项规定、纠“四风”一定让很多普通百姓的生活成本下降了。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">2014年，我跟戚务生、李维淼去澳门参加元老杯足球比赛。这一年正好又是澳门回归15周年，到那儿听说，澳门其他都挺好的，赌场面临重大挑战。为什么？官员来得少了。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">2013年的时候，我作为全国政协委员交了个提案，希望全国自然的公园都能把墙拆掉，其中一个原因就是很多公园里隐藏着会所和一些高档的东西，这个墙阻拦了人们去进行更好的监督。没想到墙还没怎么拆，公园里的会所陆续都得到了治理。我觉得挺有意思的，这样的事也很多。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">记者：听说您是音乐发烧友，一年听300多张摇滚乐专辑。如果请您把一年来的正风反腐拍成贺岁片，您会选什么音乐？</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">白岩松：那是很多年前的事了，现在可能听古典音乐远远超过这个数。如果让我选歌，我凭直觉首先要选的是张学友的《每天爱你多一些》，但我们把它改编成《每天进步一点点》。如果说这个社会每天都进步一点点，人们对社会和未来是不是就“每天爱你多一些”？反腐最重要的是形成更棒的社会风气，更好地树立信心，不能因为难就不求进步，而是每天都要进步一点点。</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com'),
(3, '管理团队', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">网友：年终岁尾，如何发放福利是职工关心、单位却纠结的事。职工应得的正常福利究竟有哪些？</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">记者：全国总工会近日下发《关于〈关于加强基层工会经费收支管理的通知〉的补充通知》，针对一些实际问题作出更明确的规定，以便于基层操作。本报记者采访了全总财务部部长朱思泽，进行详细解读。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">去年7月，全总下发了《关于加强基层工会经费收支管理的通知》（以下简称《通知》），根据规定，基层工会逢年过节可以向全体员工发放少量节日慰问品。《通知》印发后，全总陆续接到基层工会组织来信来电咨询此《通知》执行中的一些具体问题。《通知》已规定，基层工会可以用会费组织会员观看电影、开展春游秋游等集体活动。这次《补充通知》进一步明确了经费来源：当会费不足时，基层工会可以用工会经费予以适当弥补。同时也对工会组织的会员春游秋游作了限定，即应严格控制在单位所在城市，并做到当日往返。</p><p><br/></p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">《补充通知》还对“逢年过节向全体会员发放少量的节日慰问品”这句话作了详细解释：年节是指国家规定的法定节日，即元旦、春节、清明节、劳动节、端午节、中秋节和国庆节；“节日慰问品”原则上为符合中国传统节日习惯的用品和职工群众必需的一些生活用品等。关于“少量”的标准，由省级工会根据当地的实际情况来确定。考虑到全国各地情况不完全一样，全总不宜确定一个统一的发放标准，在这次《补充通知》中，全总把“逢年过节向全体会员发放少量的节日慰问品”的“少量”标准的确定权，交由省级工会。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">关于基层工会怎么给工会会员生日慰问，这次也作了明确规定：基层工会可以向会员送生日蛋糕等慰问品，也可向会员发放指定蛋糕店的领取蛋糕券。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">《通知》里规定可以对职工教育活动中的优秀学员（包括自学）给予奖励。这次也明确：应以精神鼓励为主、物质激励为辅，具体执行的标准，由省级工会根据本地区、本<a href="http://auto.ifeng.com/hangye/" target="_blank" style="text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;">行业</a>和本系统实际情况制定。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">正在举行的工会送温暖活动，一项内容是推动落实职工正常福利，出于什么考虑？全总认为，在反腐的同时，应该积极推进普通职工特别是一线职工的正常福利，改善职工住宿、就餐、医疗等集体福利，加大对困难职工帮扶救助，以及按规定发生的其他职工福利等。</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com'),
(4, '组织机构', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">本报记者分别走访了一位县委书记、一位机关办公室主任、一位社区干部，听他们讲述自己的亲身经历。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“不再为回寄贺卡烦透心”</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">——湖南省郴州市宜章县县委书记欧阳锋</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);"><strong>“今年特别轻松！”提起贺卡，湖南郴州市宜章县县委书记欧阳锋感慨道。</strong></p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">往年一到元旦春节期间，欧阳锋的办公桌上总会堆起高高一摞贺卡、明信片、年历等。“有周边县市的同事，也有省里市里一些部门的朋友，还有全国各地的同学等。”</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“多了根本就看不过来，更重要的是，回寄贺卡成了一种无奈负担。”欧阳锋说，过去两节期间要写一两百张，如今贺卡没了，“再不用为回寄贺卡烦透心了”。欧阳锋介绍，宜章县从2013年开始县乡两级禁止公款订制、邮寄贺卡，每年能节约公款50万元左右。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“微信送祝福，不单能是文字，还能是音频或者视频。”今年48岁的欧阳锋娴熟地运用微信，代替贺卡传递祝福。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">送祝福还有其他方式。比如，从2012年起，每到新春欧阳锋就会给全县领导干部推荐一本书作新年礼物。过完年，县领导班子等围坐在一起，交流读书心得。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“不再为订制贺卡跑断腿”</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">——湖北省省直机关工委办公室主任刘开亚</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“从元旦到现在，我们办公室没有收到一张贺卡。搁两年前，早就雪花般飞来了！”1月9日，湖北省省直机关工委办公室主任刘开亚感叹，短短两年，公款贺卡就得到了根治。他介绍，自2013年开始，工委办公室就取消了公款贺卡的开支。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“严禁公款贺卡，是给大家‘松绑’。”刘开亚介绍，“松绑”之前，这个对口130家省直机关的单位，每年春节就要寄送七八千张贺卡。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“一部分是以单位的名义寄送，礼尚往来，收到就得回寄；另一部分是分给工作人员，以个人的名义寄送，每人20张。”刘开亚透露，因为对口的单位太多，大多数人20张不够用，还要自己花钱买。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">作为办公室主任，2013年之前的每年元旦春节期间，刘开亚都要“为贺卡焦头烂额”。“图式、色彩、题词，都要反复斟酌，不能跟往年重复，不能太大众化，要体现单位特色等，一趟又一趟去和邮局或印刷公司谈，简直‘跑断腿’。”回忆起订制贺卡的经历，刘开亚直摇头。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">“不再为填写贺卡手抽筋”</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">——合肥五里墩街道80后社区党委书记朱红英</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com'),
(5, '公司战略', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">新华社乌鲁木齐1月11日电 中央军委委员、国务委员兼国防部长常万全近日在新疆生产建设兵团调研维稳戍边工作。他强调，要深入学习贯彻党中央、习总书记的决策指示和第二次中央新疆工作座谈会精神，不断强化政治意识、大局意识、责任意识，统筹推进各项工作，全面加强兵团建设，忠实履行维稳戍边使命，更好地发挥稳定器、大熔炉、示范区的战略作用，为维护新疆社会稳定和长治久安作出更大贡献。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">常万全指出，新疆生产建设兵团60多年来为稳疆兴疆发挥了特殊作用，作出了重大贡献。新形势下，党中央、习总书记坚持从战略全局高度审视和谋划新疆工作，对兵团建设作出一系列重大决策部署，进一步丰富和发展了党的治疆方略。要从国家安全和发展战略全局的高度，充分认清兵团的独特价值，认清加强兵团建设的重大意义，切实把兵团工作摆到重要位置来抓，履行好维稳戍边的根本职能。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">常万全强调，兵团新形势下要进一步强化样板意识，在爱党爱国爱军、强化民兵工作、推动协调发展、促进民族交融、传承先进文化、加强党的建设等方面，努力走在前列、当好示范。要强化进取意识，主动作为、深化改革，坚持根本职能，把好发展方向，注重扬长避短，推进兵地融合发展，加快兵团发展壮大，为维稳戍边奠定坚实物质基础。要强化责任意识，采取有力举措，“常”“长”使劲、跟踪问效、铁面问责，确保把中央各项决策部署落到实处。</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com'),
(6, '荣誉与奖励', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">中新网1月12日电据外媒报道，当地时间10日，美国马里兰州发生一起严重交通事故，一辆来自弗吉尼亚州的汽车同一辆18轮大卡车相撞并被轧，车内包括一名怀孕妇女和一名两个月婴儿在内的一家五口死亡，卡车司机也受伤。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">据报道，此次车祸死者包括25岁斯特拉顿(Travis Straton)及其24岁的女友瑞吉娜·艾尔斯(Regina Ayres)、他们7岁和2个月的孩子及瑞吉娜已怀孕的姐姐乍里撒(Zarissa Ayres)。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">来自维吉尼亚州格林布什的这家人五口当时准备前往巴尔的摩亲戚家。他们在行驶过程中被大卡车撞毁并被轧。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">斯特拉顿和瑞吉娜及孩子共4人当场被宣布死亡，30岁的乍里撒被送往医院，随后死亡。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">警方仍在调查车祸原因，据估计，事故的原因可能是某个司机闯红灯，但似乎没有人涉及酗酒驾车。大卡车司机也在车祸中受伤，该人被直升机送往医院，预计能够存活。</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com'),
(7, '企业文化', '<p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">中新网1月12日电据外媒报道，当地时间10日，美国马里兰州发生一起严重交通事故，一辆来自弗吉尼亚州的汽车同一辆18轮大卡车相撞并被轧，车内包括一名怀孕妇女和一名两个月婴儿在内的一家五口死亡，卡车司机也受伤。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">据报道，此次车祸死者包括25岁斯特拉顿(Travis Straton)及其24岁的女友瑞吉娜·艾尔斯(Regina Ayres)、他们7岁和2个月的孩子及瑞吉娜已怀孕的姐姐乍里撒(Zarissa Ayres)。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">来自维吉尼亚州格林布什的这家人五口当时准备前往巴尔的摩亲戚家。他们在行驶过程中被大卡车撞毁并被轧。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">斯特拉顿和瑞吉娜及孩子共4人当场被宣布死亡，30岁的乍里撒被送往医院，随后死亡。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">警方仍在调查车祸原因，据估计，事故的原因可能是某个司机闯红灯，但似乎没有人涉及酗酒驾车。大卡车司机也在车祸中受伤，该人被直升机送往医院，预计能够存活。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">中新网1月12日电据外媒报道，当地时间10日，美国马里兰州发生一起严重交通事故，一辆来自弗吉尼亚州的汽车同一辆18轮大卡车相撞并被轧，车内包括一名怀孕妇女和一名两个月婴儿在内的一家五口死亡，卡车司机也受伤。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">据报道，此次车祸死者包括25岁斯特拉顿(Travis Straton)及其24岁的女友瑞吉娜·艾尔斯(Regina Ayres)、他们7岁和2个月的孩子及瑞吉娜已怀孕的姐姐乍里撒(Zarissa Ayres)。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">来自维吉尼亚州格林布什的这家人五口当时准备前往巴尔的摩亲戚家。他们在行驶过程中被大卡车撞毁并被轧。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">斯特拉顿和瑞吉娜及孩子共4人当场被宣布死亡，30岁的乍里撒被送往医院，随后死亡。</p><p style="margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);">警方仍在调查车祸原因，据估计，事故的原因可能是某个司机闯红灯，但似乎没有人涉及酗酒驾车。大卡车司机也在车祸中受伤，该人被直升机送往医院，预计能够存活。</p><p><br/></p>', '2015-01-12', '838:59:59', 'wangte@wangte.com');

-- --------------------------------------------------------

--
-- 表的结构 `zh_admin_user`
--

CREATE TABLE IF NOT EXISTS `zh_admin_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zh_admin_user`
--

INSERT INTO `zh_admin_user` (`uid`, `username`, `password`, `salt`, `token`) VALUES
(2, 'admin', '7edec1ff2d4a904a4f19ce92cd648253', '422996', '871e1f639835c83ade027905dcda0503');

-- --------------------------------------------------------

--
-- 表的结构 `zh_articles`
--

CREATE TABLE IF NOT EXISTS `zh_articles` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `add_time` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL COMMENT '招聘信息工作地点',
  `number` varchar(20) NOT NULL COMMENT '招聘人数',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `zh_articles`
--

INSERT INTO `zh_articles` (`aid`, `type`, `title`, `content`, `add_time`, `username`, `address`, `number`) VALUES
(1, '8', '包钢四烧除氟脱硫项目通过环保核查', '<p>&nbsp; &nbsp; &nbsp;7月11日上午，国家环保部华北环保督查中心副主任宋刚带队到包钢集团公司进行环保核查。由我公司承建的包钢四烧2×265㎡烧结机除氟脱硫项目是本次核查的重点，现已通过环保核查。</p><p>&nbsp; &nbsp;核查组在听取了现场汇报并调取了历史数据后，一致认为包钢四烧除氟脱硫项目在环保核查期间一直保持95%的高脱硫效率和稳定运行，在全国环保领域起到了带头作用。</p><p>&nbsp; &nbsp;包钢四烧除氟脱硫项目一直倍受国内关注，包钢集团作为行业内率先进行烧结脱硫研究的单位之一，先后采用了空塔喷淋、半干法脱硫的尝试，在充分调研了国内外市场后结合包钢自身烟气特点最终确定采用北京中航泰达和宝钢集团研发的气喷旋冲法湿法脱硫技术。</p><p>&nbsp; &nbsp;宋刚副主任在核查时还强调了环保核查的重要性，指出了核查的内容，并对包钢乃至全国的烧结脱硫工作提出了意见。</p><p>&nbsp; &nbsp;陪同环保核查的还有包头市环保局党委书记、局长姚卫华以及集团公司的李德刚总工和相关部门的有关领导、技术人员。</p><p><br/></p>', '1425661118', 'admin', '', '0'),
(2, '11', '测试业务1', '<p>测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1</p>', '1421074182', 'wangte@wangte.com', '', '0'),
(3, '8', '公司总承包的金堆城钼业股份有限公司35万吨氧化球团矿项目脱硫工程在建中', '<p>&nbsp; &nbsp;中航泰达于2011年3月10日与新兴能源装备股份有限公司重型机械分公司签订金堆城钼业股份有限公司35万吨氧化球团矿项目脱硫专项总承包合同。</p><p>&nbsp; &nbsp;工程现场球团机烟气量为22万Nm3/h,二氧化硫浓度为2000mg/Nm3。</p><p>&nbsp; &nbsp;该项目目前正在建设中，设计脱硫效率达到95%以上。</p><p><br/></p>', '1425661295', 'admin', '', '0'),
(6, '10', '地方热 ', '<p>地方国防生的风景上看风景的看见他当减肥和郭晶晶偶俄日当解放军的收费口塑料袋咖啡机锐欧就疯狂的减肥UI如饿哦</p>', '1421074172', 'wangte@wangte.com', '', '0'),
(7, '11', '地方的收入分', '<p>地方的归属地非儿童地方的人反而对方而乳粉多萨菲尔啊 放大飞</p>', '1421074186', 'wangte@wangte.com', '', '0'),
(8, '12', '地方大润发', '<p>对方的地方大广泛地外第三方儿童按时的发射地方地方发多少阿瓦儿童反光镜和是个骚扰他地方小</p>', '1421074192', 'wangte@wangte.com', '', '0'),
(9, '13', '博鳌亚洲论坛向世界发出绿色强音', '<p>&nbsp; &nbsp; &nbsp; &nbsp;清明时节，海南岛东部小镇博鳌绿色苍茫、阳光灿烂。</p><p>　　4月11日～13日，以“绿色亚洲:在变革中实现共赢”为主题、凸显“绿色”和“变革”的博鳌亚洲论坛2008年年会在海南博鳌隆重召开，来自世界各地的政要、企业巨子和学界精英齐聚一堂，共同探讨“绿色”这一宏大的话题。</p><p>　　本届博鳌亚洲论坛年会突出“绿色”，这一主题表明亚洲当今的发展与世界潮流日益同步。当前，能源、环境、气候等因素已成为全球关切的重大问题，深刻影响着世界经济社会发展前景，亚洲作为世界上经济最具活力的地区，正在这一方面更加自觉地承担起自己的责任。</p><p>　　正如中国国家主席胡锦涛在论坛开幕式上指出的那样，亚洲的发展不仅关系亚洲的命运，而且关系世界的前途。中国愿同其他亚洲国家一道，抓住机遇，应对挑战，在应对气候变化能力建设、促进环境保护、水资源合理利用等方面加强交流合作，共同推进本地区生态文明建设，共建一个和平、发展、合作、开放的亚洲。</p><p>　　加强合作交流应对环境挑战</p><p>　　核心提示:气候变化正成为全世界面临的最大挑战和威胁，要解决这个问题，建立一个绿色环保的亚洲和世界，需要加强各国之间的合作。</p><p>　　由于人类对自然资源消耗的不断增加，地球生态环境状况正迅速恶化，特别是气候变化正成为全世界面临的最大挑战和威胁。</p><p>　　“我们必须致力于建立一个框架来应对气候变化。”澳大利亚总理陆克文在论坛上指出，每一个国家都正在面临他们自己的挑战，但是在所有问题当中，气候变化已经成为所有国家都关心讨论的内容，气候变化是全世界面临的最大问题，“如果对气候变化任其发展而不采取行动，我们将付出巨大的代价。”</p><p>　　巴基斯坦总统穆沙拉夫强调说，由于农村的贫困加上快速的工业化，使得大量的农村人口涌入城市，导致了城市过快的无序扩张，也给城镇土地和资源带来了压力。人口增长过快、大规模的城市化和贫穷的存在，加快了环境的恶化。另外，亚洲经济快速增长也导致了能源需求的上升，全球有70％的新增需求将来自于发展中国家，而其中很多都是亚洲国家。</p><p>　　“保证经济的长期有序发展、促进社会发展以及保护环境，是一项非常艰巨的任务，靠一个国家是不可能实现的，必须加强国际之间的合作。”穆沙拉夫认为必须加强国际和地区合作，加强同发达国家的合作，“应该继续遵守共同而有区别责任的原则，通过合作来有效应对我们面临的挑战。”</p><p>　　哈萨克斯坦总理马西莫夫认为，保护环境和实现可持续发展是人类社会面临的非常严肃的问题。哈萨克斯坦非常注意这一点，在开发油田时积极运用环保技术，同时也非常注重能源节约的技术。“会议的主题引导我们为亚洲的持续发展寻求崭新而有效的途径。我们有必要抓住现在的有利时机，加强与邻国的合作，以利于整个亚洲各国人民。”</p><p>　　博鳌亚洲论坛理事会理事长、菲律宾前总统拉莫斯认为，这次博鳌论坛的主题是要建立一个绿色亚洲，也就是一个绿色环保的大洲，这是短期目标，同时也是战略目标。</p><p>　　“我们要建立一个绿色的星球，在这个星球上全体的人类能够有更加光明的未来，而不会给自然带来过度的负担。我们要应对和克服由于经济发展带来的污染，建立一个更加和谐的亚洲，同时也是建立一个绿色的未来，这是我们共同的目标。”</p><p>　　“香港愿在国际上与其他城市共同应对气候变化。”香港特区行政长官曾荫权表示，优化环境仍将是他首要的施政纲领。香港正从多个方面着手优化环境:禁止新建燃煤发电厂，以天然气发电厂代替，并将电力公司的回报率与其环保表现挂钩；政府与市民合作节省能源，并积极推行可持续建筑；推行一系列措施减少运输和工业操作所产生的废气，等等。</p><p>发展绿色能源成为共识</p><p>　　核心提示:对矿物燃料和电力的急剧需求，使亚洲能源业正处在巨变之中，也面临着严峻的挑战。发展绿色能源有望促进这一问题的解决，这已成为全球共识。</p><p>　　能源已成为现代社会存在和发展的基石。随着全球经济社会的不断发展，能源消费也相应地持续增长。在长期的能源战略中，发展绿色能源正成为全球共识。</p><p>　　对矿物燃料和电力的急剧需求，使亚洲能源业正处在巨变之中，也面临着严峻的挑战:在经济发展之时，如何以环境可持续发展的方式供应能源？</p><p>　　针对这一问题，赢创德固赛公司董事长英凯师认为，能源供给问题是一个全球性问题，没有一个简单的解决方案，必须通过各国协作解决。在考虑所有选择的时候，首先要持一种开放的态度，对能源的风险进行评估，针对不同地区的具体情况采取相应的能源政策，来解决各国面临的问题。</p><p>　　“亚洲经济发展很快，但是能源效率不高，其中一个重要因素是能源的定价机制不合理。因此，破解亚洲能源困局的重要途径是提高能源的使用效率，对能源使用进行充分定价，以影响能源消费。”里昂证券主席兼首席执行官乐民信说。</p><p>　　除石油、煤炭、天然气、风能、太阳能等能源外，生物质能源已逐渐走进人们的视线，并成为本次会议的热点话题。</p><p>　　沃尔沃集团总裁兼首席执行官雷夫·约翰松说，无论是从甘蔗还是玉米当中提取燃料，都可以用来缓解某些能源供求的压力，新的能源渠道的获得，需要政企共同合作，制定一些投资和研发项目，这样才能够尽快地获得新一代的燃料。坦率地说，达到这一目标需要获得全球更多的觉悟和意识。</p><p>　　对于“用玉米等农作物提取燃料其实是一种更大的浪费”的质疑声音，英凯师则认为，“生物燃料是一个很好的选择。我们应该用一种保护的态度，去平衡经济、生态以及社会三者之间的需求。”</p><p>　　政府引导企业承担社会责任</p><p>　核心提示:解决环境问题，发展绿色能源技术，应对气候变化的挑战，这一切都需要政府的大力支持和有效引导。</p><p>　　在寻求绿色能源、维护可持续发展的探索中，政府和企业将如何协调发展推动能源革命？</p><p>　　绿色能源发展是世界和我国的长期发展趋势，只有跟上这个趋势，企业才能在未来赢得更大的发展空间。中国海洋石油总公司总经理傅成玉说，各国政府与企业家必须加大投资，发展绿色能源技术，并将其应用于实践，这是破解能源困局的关键。</p><p>　　雷夫·约翰松认为，为了尽快获得新能源，政府与企业间必须展开密切合作，制定一些投资及研发项目，加快新能源的开发与应用过程。同时，政府也应制定一些激励性措施，推动新型燃料的创新与使用，并加强监管。</p><p>　　企业在进行环保投资时，需要政府的大力支持。全世界所有的新能源，从太阳能到风能到生物发电，都有一个共同的特征，就是必须要有强大的政府支持。红杉中国基金创始及执行合伙人沈南鹏说，太阳能现在在欧洲已经变成一种非常重要的能源，这当中有欧盟的支持。中国具有非常好的风能条件，但是风能行业如果要发展起来的话，需要政府在补贴方面进行投入。</p><p>　　美林(亚太)有限公司董事总经理邱文友认为，政府应该对绿色环保企业进行补助，因为绿色环保的生产方式需要比传统方式付出更高的成本；汇丰银行有限公司行长兼行政总裁主张银行在对企业提供贷款时要逐渐附加环保条件。</p><p>　　“企业的社会责任包括很多，比如企业基础设施的使用、对环境是不是友好等等，这些方面都会对经济产生影响，在这个基础之上要看到能源、原材料的使用方面也是要承担社会责任的，政府应起到引导作用。”福特斯克金属集团总裁安德鲁·福利斯特说。</p><p>　　媒体要发挥表率推进环保</p><p>　　核心提示:绿色社会的建立需要每个人的参与，而要将环保行为升华为习惯，再升华为一种文化，需要一个良好的社会氛围。</p><p>“推进环保事业，不仅仅在于提高公众的环保认知度，更重要的是媒体也要做好自己的本职工作，发挥媒体的作用，全力宣传环保事业。”《财经》杂志执行主编王烁则说，从更广义上讲，一个有活力的媒体在社会上大力倡导绿色环保，能起到很强的舆论引导作用。</p><p>　　“大家在日常生活中很容易做到绿色环保。大家在工作的时候都会用电脑，但有30％的电脑在不用的时候或者下班以后是不关的，每年浪费的能源高达20亿美元。大家走的时候把电脑关掉，能省下不少能源。”派曲克电脑科技有限公司首席执行官张士柏说。</p><p>　　腾讯公司总裁刘炽平在会上呼吁企业和个人要进行自我约束，将环保行为升华为习惯，再升华为一种文化，让每一个人、每一个企业都参与到环保活动中来，发挥各自的创意，共同促进环保事业的发展。在谈到环保文化的建设时，刘炽平建议将教育放到重要的位置，企业、传媒和有影响力的人都应该发挥模范作用。</p><p>　　“能够在人与人、国家与国家、企业与企业之间建立一种绿色的心态，这种绿色心态就是节制、适可而止。”央视著名主持人白岩松说，如果在人与人交往，国与国交往，或者更大的方面去考虑，如果不能拥有一种绿色的心态的话，那我们谈论的绿色环保根本就不可能变成现实。</p><p>　　建设一个更加开放的绿色亚洲</p><p>　　核心提示:构建一个更加开放的绿色亚洲，是亚洲可持续发展的必由之路，也是亚洲各个国家和地区真正实现共赢的目标之一，更是亚洲与世界各国和谐相处、共同发展的历史使命。</p><p>　　亚洲博鳌论坛成立7年以来，每年都会针对环境保护与可持续发展等有关问题进行了深入探讨研究，如气候变暖、生态环境、节能减排等问题。“绿色”更是成为今年的主题。</p><p>　　那么，如何构建一个更加开放的绿色亚洲？</p><p>　　这不是一句简单的口号，而需要认真的思考和切实的行动。博鳌亚洲论坛秘书长龙永图认为，目前亚洲经济正在高速发展，而越是高速发展，越容易犯错误。如何在高速发展的同时做到对环境友好，如何能使这个高速是可持续的，如何能够避免重蹈发达国家的失误，对亚洲国家来说是一个很大的挑战，所以绿色对于亚洲尤其重要，亚洲对于环保节能的问题应该更加敏感。</p><p>　　缓减气候变暖、实现节能减排，亚洲一些国家已经做出了表率。沙特基础工业集团副董事长兼首席执行官阿尔马迪在针对气候变暖问题的“气候变化:改变我们的生活、改变我们的经济”分论坛上说，我们一开始就与我们的员工定下环境保护的标准，要他们保护环境。所以，不管是从产业的角度还是从人员的角度来说，我们都是在共同地做出一些努力，使得我们的城市、我们这个地区的环境更好。”</p><p>　　“我们对影响环境的关键因素一直是非常关注的。”日本环境大臣鸭下一郎认为，我们要提出国家的总体目标，同时我们也考虑到行业的问题，比如说钢铁制造和水泥制造，所有这些产业部门和行业都是二氧化碳的排放企业。</p><p>　　“我们要考虑到行业的因素，看看全球能够达成什么样的共识来减少这些行业的排放。不仅仅只是日本，世界上所有的国家都应该关注钢铁，还有其他高排放行业的问题。”鸭下一郎说。</p><p>　　“气候变化包括节能减排已成为全球关注并日益影响到经济和民生的重大问题。亚洲作为全球经济最具活力的地区，不能也不愿置身事外。”龙永图的一番话，道出了与会亚洲各国的心声。</p><p>　　4月13日夜晚，博鳌亚洲论坛落下帷幕，但绿色的主题并没止步。构建一个更加开放的绿色亚洲，是亚洲可持续发展的必由之路，也是亚洲各个国家和地区真正实现共赢的目标之一，更是亚洲与世界各国和谐相处、共同发展的历史使命。</p><p>&nbsp;</p><p>&nbsp;<span class="Apple-tab-span" style="white-space:pre">	</span>来源：中国环境报</p><p><br/></p>', '1425659176', 'admin', '', '0'),
(10, '14', '的而的娿方', '<p>地方多发规划丰盛的打撒放大 的多发阿迪分公司风格水电费公司公司</p>', '1421074201', 'wangte@wangte.com', '', '0'),
(11, '15', '多福多寿夫方方', '<p>的发放日公司房顶上投入发多少热发多少而第三个飞儿根深蒂固人十大歌手人 讽德诵功人是</p>', '1421074208', 'wangte@wangte.com', '', '0'),
(12, '16', '方方', '<p>地方热公司发多少热讽德诵功风洞试验地方v如风达他鬼地方高收费他说让他管饭的&nbsp;</p>', '1421074213', 'wangte@wangte.com', '', '0'),
(13, '8', '包钢还原铁有限责任公司球团烟气脱硫项目在建中', '<p>&nbsp; &nbsp; 中航泰达于2011年5月20日与内蒙古包钢还原铁有限责任公司签订包钢还原铁有限责任公司球团烟气脱硫项目总承包合同。</p><p>&nbsp; &nbsp;工程现场球团机烟气量为70万m3/h, HF浓度小于60mg/Nm3，二氧化硫浓度为3608～4040mg/Nm3（平均3800mg/Nm3）。</p><p>&nbsp; &nbsp;该项目目前正在建设中，设计出口HF浓度≤6 mg/Nm3，脱硫效率达到97%以上。</p><p><br/></p>', '1425661346', 'admin', '', '0'),
(14, '8', '包钢热电厂6*130t/h锅炉除尘脱硫总包工程在建中', '<p>&nbsp; &nbsp; &nbsp;中航泰达于2011年6月13日与内蒙古包钢钢联股份有限公司设备备件供应分公司签订包钢热电厂6*130t/h锅炉除尘脱硫工程总承包合同。</p><p>&nbsp; &nbsp;工程现场每台锅炉的烟气量为30万m3/h,二氧化硫浓度为2600～3000mg/Nm3（平均2876mg/Nm3）。</p><p>&nbsp; &nbsp;该项目目前正在建设中，设计出口二氧化硫浓度≤200 mg/Nm3，脱硫效率达到94%以上。</p><p><br/></p>', '1425661410', 'admin', '', '0'),
(16, '9', '治理雾霾执行力较弱，环保法细化治理措施', '<p>&nbsp;4月22日是第45个世界地球日，世界地球日旨在唤起人类爱护地球、保护家园的意识。然而，在地球日即将来临之时，我们却无奈地发现，我们在地球上赖以生存的空气已是不同往日，雾霾频频来袭……自去年冬季以来，我国北方地区日益严重的雾霾天气在人们心里留下了阴影。如何让天空重现蔚蓝成为眼下非常迫切的一个议题。</p><p>　　4月21日，十二届全国人大常委会第八次会议听取了全国人大法律委员会副主任委员张鸣起作的关于环境保护法修订草案审议结果的报告。《环境保护法》实施25年来首次面临重大修改，经过三次激烈争论的审议，当天第四次提交全国人大常委会审议，这也被看作是《环保法》全新修改立法的最后冲刺。</p><p>　　针对环境保护领域的突出问题，修订草案增加了关于划定生态保护红线的规定，完善了关于行政强制措施、区域限批制度的规定，扩大了提起环境公益诉讼的主体范围，对大气污染特别是雾霾治理和应对作出了更有针对性的规定。</p><p>　　在修订草案已明确政府责任、加大对违法排污的惩罚力度以及加强监督等的基础上，增加规定：一是在跨行政区域的重点区域、流域联合防治中实行统一标准；二是国家促进清洁生产和资源循环利用；三是县级以上人民政府建立环境污染公共预警机制，组织制定预警方案。</p><p>　　中国环科院副院长柴发合表示：每个地方的空气质量改进有快有慢，但区域必须协调，统一污染物排放标准。比如，京津冀地区，北京的机动车和燃油执行京V标准，而其他地区却没有，而机动车又是在地区之间流动的，这种排放标准应该先统一起来。</p><p>　　大气污染只是环境污染问题的一个缩影，人无远虑必有近忧。以牺牲环境换取经济增长的时代已经过去，面对经济健康增长的需求，环境友好型的健康可持续发展是大势所趋。加快发展环保产业，利当前、惠长远，不仅有利于治理环境污染、改善生态环境，而且有利于拉动有效投资，带动新兴产业成长，有利于转方式、调结构，对促进经济社会可持续发展具有巨大推动作用。</p><p><br/></p>', '1425782371', 'admin', '', '0'),
(17, '15', 'd是范德萨发生 ', '<p>第三方的撒范德萨发是的</p>', '1421072834', 'wangte@wangte.com', '', '0'),
(18, '15', '打撒放大发生', '<p>地方说当发生的发大水</p>', '1421072847', 'wangte@wangte.com', '', '0'),
(19, '15', '都发热热热', '<p>第三方水电费打撒范德萨发生</p>', '1421072855', 'wangte@wangte.com', '', '0'),
(20, '15', '说代发地方', '<p>水电费打撒佛挡杀佛&nbsp;</p>', '1421072935', 'wangte@wangte.com', '', '0'),
(21, '13', '温家宝主持召开国务院常务会议同意发布新修订的《环境空气质量标准》部署加强大气污染综合防治重点工作', '<p>新华社北京2012年2月29日电&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;国务院总理温家宝今日主持召开国务院常务会议，同意发布新修订的《环境空气质量标准》，部署加强大气污染综合防治重点工作。</p><p>　　为使环境空气质量评价结果更加符合实际状况，更加接近人民群众切身感受，会议同意发布新修订的《环境空气质量标准》。新标准增加了细颗粒物(PM2.5)和臭氧(O3)8小时浓度限值监测指标。会议要求2012年在京津冀、长三角、珠三角等重点区域以及直辖市和省会城市开展细颗粒物与臭氧等项目监测，2013年在113个环境保护重点城市和国家环境保护模范城市开展监测，2015年覆盖所有地级以上城市。</p><p>　　会议指出，党中央、国务院高度重视大气污染防治工作。“十一五”以来，全国大气环境质量基本稳定，部分城市空气质量有所好转，大气中二氧化硫(SO2)和可吸入颗粒物(PM10)等持续下降。但同时要看到，当前我国污染物排放总量依然较大，区域性大气污染问题仍很突出，大气环境形势严峻。要以更大的决心、更高的标准、更有力的措施，切实加强大气污染综合防治，推动空气质量持续改善。一要加快淘汰电力、钢铁、建材、有色、石化、化工等行业的落后产能。在大气污染联防联控重点区域积极推进使用清洁能源。对城区重污染企业实施搬迁和节能环保技术改造，优化工业布局。二要提高环境准入门槛。在重点区域实施更加严格的大气污染物排放特别限值，禁止新建、扩建除热电联产以外的燃煤电厂、钢铁厂、水泥厂。严把新建项目准入关，严格环境执法监管。充分发挥市场机制作用，大力发展环保产业。三要深化污染减排。推进电力行业和钢铁、石化等非电行业二氧化硫减排治理。加快燃煤机组脱硝设施建设，加强水泥行业氮氧化物治理。四要突出抓好机动车污染防治。提高车用燃油品质与机动车排放标准。到2015年，基本淘汰2005年以前注册运营的“黄标车”。五要加强协同防控。在京津冀、长三角、珠三角等重点区域，实施大气污染联防联控。建立极端气象条件下大气污染预警体系。</p><p>　　会议强调，我国是发展中大国，正处于工业化、城镇化快速发展时期，保护环境、改善空气质量，需要全社会长期不懈的共同努力。要加强环境法制建设，加强科学宣传和教育引导，增强公众环保意识，落实机关企事业单位、社会组织和公民的环保责任，大力倡导和践行绿色环保的生产生活方式。</p><p>　　会议听取了北京市2012~2020年大气污染治理措施的汇报。</p><p><br/></p>', '1425659318', 'admin', '', '0'),
(22, '13', '雾霾治理催热脱硫脱硝设备需求', '<p style="text-align: center;"><img src="/upload/image/20150307/1425659484387702.png" title="977502.png" alt="977502.png"/></p><p>2013年1月23日，雾霾天气再次席卷京城。包括东城东四、西城官园、朝阳农展馆、海淀万柳、丰台云岗等多个评价点空气质量指数超过300微克，属六级严重污染。郊区大兴、亦庄、平谷等监测点也达到六级污染水平。</p><p>　　对此，业内人士指出，造成我国空气质量不好的原因主要是由于煤炭消费密度过大造成的。从短期来看，脱硫脱硝改造是我国空气污染治理最迫切、最有效的方法。</p><p>　　脱硫脱硝序幕拉开</p><p>　　目前，我国PM（大气中的固体或液体颗粒状物质）远高于国际标准，空气污染严重。世界卫生组织认为，PM2.5（可入肺颗粒物）小于10是安全值，美国环保局制定的PM2.5年平均浓度限值15微克/立方米。而中国的中东部地区几乎全部高于50接近80，比撒哈拉沙漠还要高很多。</p><p>　　治理雾霾天气，根本是要降低空气中颗粒物尤其是细颗粒的浓度，但空气中颗粒物有一半来自工业废气。早在2000年，我国修改的《大气污染防治法》就明确规定二氧化硫等污染物超标排放是违法行为。2004年，原国家环保总局和国家质检总局联合发布新版《火电厂大气污染物排放标准》，要求1997年1月1日以后改、扩、建的电厂必须上脱硫装置。</p><p>　　但2009年的统计数据表明，在全国工业废气排放中，二氧化硫占比44%，氮氧化物占比30%，工业粉尘和烟尘合计占比26%。显然，我国脱硫脱硝的工作难度依然很大。</p><p>　　“十一五”期间，国家将主要污染物排放总量显著减少作为经济社会发展的约束性指标，2010年火电脱硫装机比重由2005年的12%提高到82.6%，二氧化硫排放总量则下降了14.29%，超额完成国家规定的减排任务。</p><p>　　“十二五”期间，国家在继续推进二氧化硫和COD减排的同时，新增了氮氧化物和氨氮两项作为总量控制指标，尤其针对氮氧化物的减排，出台了《火电厂大气污染物排放标准》，要求存量和新增机组在规定限期内必须完成脱硝改造。</p><p>　　而在今年1月9日，国家发改委已经下发了《关于扩大脱硝电价政策试点范围有关问题的通知》，自2013年1月1日起，将脱硝电价试点范围由现行14个省的部分燃煤发电机组，扩大为全国所有燃煤发电机组。脱硝电价标准为每千瓦时8厘钱。</p><p>　　分析师认为，目前来看，大气污染防治特别是烟气脱硝领域已具备大规模推进的条件：一方面是技术成熟度较高，包括前端低氮燃烧、后端SNCR和SCR技术在内的主流脱硝工艺已为多数企业掌握；另一方面，在“史上最严”大气排放标准、与主要企业签订减排责任书等一系列政策力推下，今年以来火电厂脱硝序幕已渐次拉开，市场格局已初步形成，产业化基础已具备。</p><p>　　设备需求将加速释放</p><p>　　相较于其他诸如污水和固废处理、土壤污染治理等环保产业门类来说，火电烟气脱硝在技术成熟度、产业化基础及相关配套政策完善度等方面均具有一定的优势。加之水泥行业后期脱硝进程的跟进，两大行业脱硝所蕴藏的数千亿元市场空间，有望在未来一段时期加速释放。</p><p>　　业内人士解释说，目前在污染治理上，电除尘和布袋除尘都可以达到比较高的效率。不过，除尘的市场已经是相对稳定的，不会再出现爆发式的增长，而脱硫脱硝市场还存在着市场机会。</p><p>　　事实上，自发改委正式下发脱硝电价政策开始，巨大的脱硝市场便正式大范围启动。数据显示，截至2011年底，我国累计投运的脱硝机组容量约1.29亿千瓦，当年火电装机达7.87亿千瓦，未改造的存量市场巨大，而按照脱硝的时间表，目前距离脱硝期限不足两年，因此巨大的存量市场短期内集中释放将带来订单的高弹性。</p><p>　　市场人士指出，脱硝电价8厘/千瓦时的补贴额度的明确，也结束了部分火电企业以工程进度为筹码与政策制定部门博弈的过程，有助于脱硝市场的加速推进。</p><p>　　从脱硫行业的发展看，在总量控制标准的强制约束下，“十一五”期间，全国脱硫机组占比较之前有了大幅提升。据中电联统计，截至2011年年底，我国火电烟气脱硫机组合同容量6.84亿千瓦，累计投运容量5.18亿千瓦，全国火电厂已投运烟气脱硫机组容量占全国燃煤机组容量的75.73％。</p><p>　　有相关券商分析师测算，2013年全国新增火电厂脱硝装机规模可达1.5亿千瓦，全国水泥厂逾900条生产线脱硝改造也将大规模启动，两大行业可创造的烟气脱硝市场规模将达数千亿元，这将极大地撬动脱硫脱硝设备市场的需求。</p><p>&nbsp;</p><p><br/></p>', '1425659696', 'admin', '', '0'),
(23, '13', '李克强：促进节能减排和低碳发展', '<p>&nbsp;<span class="Apple-tab-span" style="white-space:pre">	</span></p><p>北极星节能环保网讯:3月21日，中共中央政治局常委、国务院总理李克强主持召开节能减排及应对气候变化工作会议，推动落实《政府工作报告》，促进节能减排和低碳发展，研究应对气候变化相关工作。中共中央政治局常委、国务院副总理张高丽出席会议。</p><p>李克强指出，去年节能减排取得新进展，但今年的任务更加艰巨，要在保持经济增长7.5%左右的情况下，实现单位GDP能耗下降3.9%的目标，十分不易。尽管经济存在下行压力、稳增长面临挑战，我们仍要坚定不移地推进节能减排。这是给自己压“担子”，必须努力走出一条能耗排放做“减法”、经济发展做“加法”的新路子，对人民群众和子孙后代尽责。</p><p>李克强说，必须看到，节能减排与促进发展并不完全矛盾，关键是要协调处理好，找到二者的合理平衡点，使之并行不悖、完美结合。淘汰落后产能，关停高耗能、高排放企业，会对增长带来影响，但其中也蕴含着很大商机，会为新能源、节能环保等新兴产业成长提供广阔空间。我们要善抓机遇，进退并举，控制能源消费总量，提高使用效率，调整优化能源结构，积极发展风电、核电、水电、光伏发电等清洁能源和节能环保产业，开工一批新项目，大力推广分布式能源，发展智能电网，逐步把煤炭比重降下来。尤其是要着力发展服务业特别是生产性服务业。服务业总体能耗低，又是就业最大容纳器，对推动发展潜力巨大。要加快有序放宽市场准入、加大政策激励，提升服务业在国民经济中的比重，确保今年继续超过二产，使其成为促进产业结构优化、推动节能减排和低碳发展的关键一招。</p><p>李克强强调，《政府工作报告》已对今年节能减排工作作出部署。要加强政策引导，更多引入和运用市场机制，推进工业、建筑、交通运输、公共机构等重点领域和重点单位节能，加大污染特别是大气污染治理，努力改善重点地区雾霾状况。建立和实施能效“领跑者”等制度，增强全社会特别是企业节能减排的内在动力。</p><p>李克强要求，必须用硬措施完成节能减排硬任务。要强化责任，把燃煤锅炉改造、淘汰黄标车、电厂脱硫脱硝除尘等任务指标分解到各地区，对完不成任务的，要加大问责力度。严格执法，对非法偷排、超标排放、逃避监测等“伤天害人”行为和监管失职渎职重拳打击，对相关企业、单位和责任人严惩不贷。今年国务院要组织明察暗访，发现问题一查到底，决不放过。</p><p>李克强说，应对气候变化与节能减排相辅相成，是人类的共同责任。中国作为负责任的大国，愿主动积极作为，与世界各国一道，在坚持共同但有区别的责任原则、公平原则、各自能力原则的基础上，为应对气候变化的挑战作出更大努力。</p><p>会议原则通过《2014—2015年节能减排低碳发展行动方案》，并研究讨论了我国应对气候变化的行动方案。</p><p>中共中央政治局委员、国务院副总理马凯，国务委员杨晶、杨洁篪、王勇参加会议。</p><p><br/></p><p><br/></p>', '1425659586', 'admin', '', '0'),
(24, '13', '环境监察执法证件管理办法下月生效', '<p>&nbsp; &nbsp; &nbsp; &nbsp; 中国环境报讯 环境保护部于2013年12月26日颁布的《环境监察执法证件管理办法》（以下简称《办法》，相关解读详见今日三版）将于2014年3月1日起正式生效。</p><p>　　《办法》是为贯彻落实《中华人民共和国行政处罚法》、国务院《全面推进依法行政实施纲要》和国务院办公厅《关于推进行政执法责任制的若干意见》的各项要求，为适应新形势、更好地规范环境监察执法行为、在广泛调研并征求意见后颁布的。</p><p>　　《办法》对于申领环境监察执法证件的人员设置了4个必要条件：一是县级以上环境保护主管部门具有正式编制拟从事环境监察执法工作的人员；二是具有全日制大专以上学历；三是在环境保护主管部门工作满一年；四是参加环境监察执法资格培训并经考试合格。</p><p>　　《办法》提出，申领人员提交证件申请后，同级环境监察机构应对其申请资料进行严格审核，认为其符合《办法》要求的，在全国环境监察队伍管理系统中予以提交。经逐级审核通过后，由发证部门发放正式执法证件。</p><p>　　在环境监察执法证件的使用方面，《办法》要求，持证人应按照《办法》及其他相关法律法规的要求，在执行公务时正确使用环境监察执法证件。</p><p>　　《办法》还对环境监察执法资格培训管理，环境监察执法证件的审验，环境监察执法证件的补发与换发，以及责任追究等方面做出了明确规定。</p><p><br/></p>', '1425659646', 'admin', '', '0'),
(25, '1', '隆重纪念全民族抗战爆发77周年', '<p><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">月</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">7</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">日是</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">“</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">七七事变</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">”77</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">周年纪念日。</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">2014</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">年</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">7</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">月</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: simsun, serif">7</span><span style="color: rgb(43, 43, 43);font-size: 16px;letter-spacing: -1.5333333015441895px;line-height: 24px;text-indent: 28px;font-family: 宋体">日上午，公司组织主要领导及员工代表在将在公司多功能厅开展“不忘国耻，奋发图强，振兴中华”为主题的爱国主义教育活动，并观看党和国家领导人同首都各界代表一起在中国人民抗日战争纪念馆举行的纪念仪式。请大家合理安排时间。</span></p>', '1425659910', 'admin', '', '0'),
(26, '1', '中航泰达视频会议正式开通', '<p>&nbsp; &nbsp; 公司行政人事部和包头项目指挥部经过近一个月的共同努力，至此公司实行的视频会议正式开通。这对于今后公司本部与在外地施工的现场进行“面对面”交流和指挥、实行现代化管理将起到重要作用。</p><p>&nbsp; &nbsp; &nbsp; “经理办公会，现在开始！”4月23日上午10时，随着公司郭副总经理的宣布，在北京中航泰达科技有限公司会议室和包头项目指挥部的会议室里，两幅巨大的屏幕上清晰地显示出两地会议室的情景。</p><p>&nbsp;&nbsp;</p>', '1425660032', 'admin', '', '0'),
(27, '8', '公司烟气脱硫装置获“环境友好型技术产品”殊荣', '<p>&nbsp; &nbsp; &nbsp;北京中航泰达科技有限公司烟气脱硫装置——气喷旋冲脱硫除尘装置、旋涡撞击流脱硫除尘装置经过专家评审，符合中国环境科学学会《“环境友好型技术产品”环保性能第三方审核与信息披露工作实施细则（实行）》的要求，被评为“环境友好型技术产品”。&nbsp;</p><p><br/></p><p style="text-align:center"><img src="/upload/image/20150307/1425661505688403.jpg" title="20120803112143893.jpg" alt="20120803112143893.jpg"/></p><p><br/></p>', '1425661548', 'admin', '', '0'),
(28, '9', '图片新内容', '<p>图案偶偏心外人呢 大房间按甲方</p>', '1425782314', 'admin', '', '0'),
(29, '9', '团拍内心温暖', '<p>的发生范德萨范德萨发地方的</p>', '1425783055', 'admin', '', '0'),
(30, '18', '招聘1', '<p>招聘1</p>', '1425803388', 'admin', '', '0'),
(31, '18', '招聘2', '<p>招聘2</p>', '1425803474', 'admin', '', '0'),
(32, '18', '招聘职位3', '<p>招聘职位3</p>', '1425804877', 'admin', '北京', '10人'),
(33, '17', '人才政策吾问无为谓', '<p>地方萨芬圣达菲的发顺丰的萨菲当发射但是地方撒仿盛大仿盛大</p>', '1425806270', 'admin', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `zh_articles_type`
--

CREATE TABLE IF NOT EXISTS `zh_articles_type` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(45) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `zh_articles_type`
--

INSERT INTO `zh_articles_type` (`pid`, `name`, `tid`, `en_name`) VALUES
(0, '公司公告', 1, 'Company Announcement'),
(0, '新闻动态', 2, 'News'),
(0, '业务介绍', 3, 'Cases'),
(0, '专利技术', 4, 'R&D Center'),
(0, '人力资源', 5, 'Corporate Culture'),
(0, '下载中心', 6, 'Download Center'),
(0, '公司概况', 7, 'Company Overview'),
(2, '公司动态', 8, ''),
(2, '图片新闻', 9, ''),
(2, '行业动态', 10, ''),
(3, '业务领域', 11, ''),
(3, '业绩案例', 12, ''),
(3, '核心技术', 13, ''),
(3, '业务视野', 14, ''),
(5, '人才理念', 15, ''),
(5, '人才现状', 16, ''),
(5, '人才政策', 17, ''),
(5, '招聘信息', 18, ''),
(7, '公司简介', 20, ''),
(7, '董事长致辞', 21, ''),
(7, '管理团队', 22, ''),
(7, '组织机构', 23, ''),
(7, '公司战略', 24, ''),
(7, '荣誉与奖励', 25, ''),
(7, '企业文化', 26, ''),
(6, '工作通知', 27, ''),
(6, '说明材料', 28, ''),
(6, '合同文件', 29, '');

-- --------------------------------------------------------

--
-- 表的结构 `zh_home_pic`
--

CREATE TABLE IF NOT EXISTS `zh_home_pic` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `order` int(5) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `zh_home_pic`
--

INSERT INTO `zh_home_pic` (`pid`, `url`, `order`) VALUES
(1, 'upload/20150125/142217864929.png', 1),
(2, 'upload/20150308/142578369737.jpg', 2),
(3, 'upload/20150308/142578370444.jpg', 3),
(4, 'upload/20150118/142158688444.jpg', 5),
(5, 'upload/20150118/142158674727.jpg', 4);

-- --------------------------------------------------------

--
-- 表的结构 `zh_pic_news`
--

CREATE TABLE IF NOT EXISTS `zh_pic_news` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL,
  `path_pic` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `zh_pic_news`
--

INSERT INTO `zh_pic_news` (`pid`, `aid`, `path_pic`) VALUES
(1, 16, 'upload/20150308/142578237131.jpg'),
(2, 16, 'upload/20150308/142578237131.jpg'),
(3, 16, 'upload/20150308/142578237131.jpg'),
(4, 16, 'upload/20150308/142578237131.jpg'),
(5, 16, 'upload/20150308/142578237131.jpg'),
(6, 16, 'upload/20150308/142578237131.jpg'),
(7, 16, 'upload/20150308/142578237131.jpg'),
(8, 28, 'upload/20150308/142578231434.jpg'),
(9, 29, 'upload/20150308/142578305555.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `zh_statistics`
--

CREATE TABLE IF NOT EXISTS `zh_statistics` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `tid` int(10) NOT NULL COMMENT '类型id',
  `click_amount` int(20) NOT NULL COMMENT '点击量',
  `aid` int(20) NOT NULL COMMENT '文章的ID',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `zh_statistics`
--

INSERT INTO `zh_statistics` (`sid`, `tid`, `click_amount`, `aid`) VALUES
(1, 8, 3, 3),
(4, 27, 3, 8),
(5, 28, 2, 14),
(6, 13, 1, 9),
(7, 11, 1, 7),
(8, 8, 1, 1),
(9, 15, 1, 17),
(10, 8, 1, 14),
(11, 13, 1, 24),
(12, 13, 3, 22),
(13, 9, 3, 16),
(14, 8, 1, 27),
(15, 1, 1, 26),
(16, 9, 2, 28),
(17, 9, 1, 29),
(18, 18, 2, 31),
(19, 18, 7, 32),
(20, 18, 1, 30),
(21, 16, 1, 12);

-- --------------------------------------------------------

--
-- 表的结构 `zh_uploads`
--

CREATE TABLE IF NOT EXISTS `zh_uploads` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `add_time` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tid` int(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `zh_uploads`
--

INSERT INTO `zh_uploads` (`uid`, `url`, `username`, `add_time`, `title`, `tid`) VALUES
(8, 'upload/20150119/142163549959.pdf', 'wangte@wangte.com', '1421635499', 'A+Sparsity+Enhanced+Channel+Estimation+Algorithm+B', 27),
(14, 'upload/20150125/142219149232.docx', 'wangte@wangte.com', '1422191492', '后台测试报告-20150122-jordanhall2lizzy-1.0.docx', 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 01 月 12 日 07:56
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhonghang`
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
(1, '公司简介', '<p>我的滑板鞋，摩擦摩擦。</p>', '2015-01-06', '838:59:59', 'wangte@wangte.com'),
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
(2, 'wangte@wangte.com', '7edec1ff2d4a904a4f19ce92cd648253', '422996', '871e1f639835c83ade027905dcda0503');

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
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zh_articles`
--

INSERT INTO `zh_articles` (`aid`, `type`, `title`, `content`, `add_time`, `username`) VALUES
(1, '8', '测试动态1', '<p>测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1</p>', '2015/01/06', 'wangte@wangte.com'),
(2, '11', '测试业务1', '<p>测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1</p>', '2015/01/06', 'wangte@wangte.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `zh_articles_type`
--

INSERT INTO `zh_articles_type` (`pid`, `name`, `tid`, `en_name`) VALUES
(0, '新闻动态', 2, 'News'),
(0, '业绩案例', 3, 'Cases'),
(0, '研发中心', 4, 'R&D Center'),
(0, '人力资源', 5, 'Corporate Culture'),
(0, '下载中心', 6, 'Download Center'),
(0, '公司概况', 7, 'Company Overview'),
(2, '公司动态', 8, ''),
(2, '图片新闻', 9, ''),
(2, '媒体聚焦', 10, ''),
(3, '业务领域', 11, ''),
(3, '水务投资项目', 12, ''),
(3, '行业动态', 13, ''),
(3, '业务视野', 14, ''),
(5, '人才理念', 15, ''),
(5, '人才现状', 16, ''),
(5, '人才政策', 17, ''),
(5, '招聘信息', 18, ''),
(5, '澄清公告', 19, ''),
(7, '公司简介', 20, ''),
(7, '董事长致辞', 21, ''),
(7, '管理团队', 22, ''),
(7, '组织机构', 23, ''),
(7, '公司战略', 24, ''),
(7, '荣誉与奖励', 25, ''),
(7, '企业文化', 26, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

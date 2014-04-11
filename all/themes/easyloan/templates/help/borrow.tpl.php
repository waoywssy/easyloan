<?php
/**
 * @file
 * Forget password
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
/*
$options = array(
    'group'  => CSS_SYSTEM - 1,
    'weight' => -10,
  );
*/
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/help.js');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/help.css');
?>
<div class="pg-help-main rrdcolor-dimgray-text p20bs">
  <div>
    <h1 class="h3">借款产品分类</h1>
    <div>
      <h2 class="h4 mt10 bg-blue" id="prod-work">工薪贷</h2>
      <dl style="display: block;">
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="25%">产品名称</td>
              <td width="75%">工薪贷</td>
            </tr>
            <tr>
              <td>申请条件</td>
              <td>
                <p>（1）年满22-55周岁的中国公民</p>
                <p>（2）在现单位工作满3个月</p>
                <p>（3）月收入2000以上</p>
              </td>
            </tr>
            <tr class="table-tr-color">
              <td>主要借款用途</td>
              <td>装修、结婚、买房、买车、教育（进修、出国留学）、其他消费</td>
            </tr>
            <tr>
              <td>借款额度</td>
              <td>3,000 - 500,000 </td>
            </tr>
            <tr class="table-tr-color">
              <td>借款年利率</td>
              <td>10% - 24% </td>
            </tr>
            <tr>
              <td>借款期限</td>
              <td>3、6、9、12、18、24个月</td>
            </tr>
            <tr class="table-tr-color">
              <td>审核时间</td>
              <td>1-3个工作日</td>
            </tr>
            <tr>
              <td>还款方式</td>
              <td>等额本息，每月还款</td>
            </tr>
            <tr class="table-tr-color">
              <td>必要申请材料</td>
              <td>
                <p>（1）身份证</p>
                <p>（2）个人征信报告（可去当地人民银行打印）</p>
                <p>（3）带公司公章的劳动合同或工作证明</p>
                <p>（4）近3个月工资卡银行流水</p>
              </td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4 bg-green" id="prod-biz">生意贷</h2>
      <dl style="display: block;">
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="25%"> 产品名称</td>
              <td width="75%">生意贷</td>
            </tr>
            <tr>
              <td>申请条件</td>
              <td>
                <p>（1）年满22-55周岁的中国公民</p>
                <p>（2）企业经营时间满1年</p>
              </td>
            </tr>
            <tr class="table-tr-color">
              <td>主要借款用途</td>
              <td>流动资金、采购设备或原材料、市场推广费用</td>
            </tr>
            <tr>
              <td>借款额度</td>
              <td>3,000 - 500,000</td>
            </tr>
            <tr class="table-tr-color">
              <td>借款年利率</td>
              <td>10% - 24%</td>
            </tr>
            <tr>
              <td>借款期限</td>
              <td>3、6、9、12、18、24个月</td>
            </tr>
            <tr class="table-tr-color">
              <td>审核时间</td>
              <td>1-3个工作日</td>
            </tr>
            <tr>
              <td>还款方式</td>
              <td>等额本息，每月还款</td>
            </tr>
            <tr class="table-tr-color">
              <td>必要申请材料</td>
              <td>
                <p>（1）身份证</p>
                <p>（2）个人征信报告（可去当地人民银行打印）</p>
                <p>（3）经营证明：</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;a）通过年检且注册满1年的营业执照</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;b）经营场地租赁合同+90天内的租金发票或水电单据</p>
                <p>（4）可体现经营情况的近6个月常用银行卡流水（对公账户或个人账户）</p>
              </td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4 bg-orange" id="prod-ecomm">网商贷</h2>
      <dl style="display: block;">
        <dd>
          <table width="100%" class="pg-help-table">
            <tbody><tr class="table-tr-color">
              <td width="25%"> 产品名称</td>
              <td width="75%">网商贷</td>
            </tr>
            <tr>
              <td>申请条件</td>
              <td>
                <p>（1）年满22-55周岁的中国公民</p>
                <p>（2）在淘宝或天猫平台经营网店满半年</p>
                <p>（3）近3个月交易总额满3万，并且交易笔数超过50笔</p>
              </td>
            </tr>
            <tr class="table-tr-color">
              <td>主要借款用途</td>
              <td>流动资金、采购设备或原材料、市场推广费用</td>
            </tr>
            <tr>
              <td>借款额度</td>
              <td>3,000 - 300,000</td>
            </tr>
            <tr class="table-tr-color">
              <td>借款年利率</td>
              <td>10% - 24%</td>
            </tr>
            <tr>
              <td>借款期限</td>
              <td>3、6、9、12、18、24个月</td>
            </tr>
            <tr class="table-tr-color">
              <td>审核时间</td>
              <td>1-3个工作日</td>
            </tr>
            <tr>
              <td>还款方式</td>
              <td>等额本息，每月还款</td>
            </tr>
            <tr class="table-tr-color">
              <td>必要申请材料</td>
              <td>
                <p>（1）身份证</p>
                <p>（2）提供网店地址及阿里旺旺账号</p>
                <p>（3）需QQ视频审核</p>
              </td>
            </tr>
          </tbody></table>                    
        </dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">如何申请借款</h1>
    <div>
      <h2 class="h4"><span>1. 什么人能成为人人贷的借款人？</span></h2>
      <dl>
        <dd>22-55周岁的具有合法收入和还款能力的中国公民。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 借款金额有限制吗？</span></h2>
      <dl>
        <dd>工薪贷、生意贷产品额度：3,000-500,000；网商贷产品额度：3,000-300,000。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 人人贷的借款期限和还款方式？</span></h2>
      <dl>
        <dd>目前信用借款您可以选择的借款期限3个月、6个月、9个月、12个月、18个月、24个月。还款方式是按月等额本息还款。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 在人人贷借款是否需要抵押、担保？</span></h2>
      <dl>
        <dd>不需要。在人人贷上的借款都是以借款人的信用评级为基础的、不涉及到抵押物及其他人的担保。从而免去了繁杂的手续和可能由抵押物引起的纠纷。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 如何在人人贷上申请借款？</span></h2>
      <dl>  
        <dd>第一步：注册人人贷账号，进行安全认证 </dd>
        <dd>第二步：填写发标信息，上传信用资料 </dd>
        <dd>第三步：通过网站审核，获得信用额度 </dd>
        <dd>第四步：在网站进行筹标，获得借款 </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>6. 借款利率是如何确定的？</span></h2>
      <dl>  
        <dd>借款用户可跟据自身情况，参考网站对各借款期限设定的相应借款利率下限及网站近期的成交借款利率自行设定可接受的利率。在同等情况下，借款利率越高的借款，成功满标的概率越大。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>7. 我需要在多长时间内提交所需的材料？</span></h2>
      <dl>  
        <dd>我们建议您尽快提交所有所需材料以免材料超过有效时限。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>8. 是否可以修改已发布的借款</span></h2>
      <dl>  
        <dd>不可以。在用户发布借款之后，不可以对已发布的借款进行修改。请用户在发布借款时务必认真填写各项信息。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">人人贷认证</h1>
    <div>
      <h2 class="h4"><span>1. 借款人信用认证</span></h2>
      <dl>
        <dd>申请借款的用户需要根据不同的产品提交相应的信用认证材料，经过人人贷审核后获取相应的信用等级及借款额度。所需提供的认证资料分为必要认证资料和可选认证资料。其中，必要认证资料的是借款申请进入审核的必要条件，缺一不可；可选认证是人人贷对借款用户资质及还款能力判定的重要标准，建议借款用户尽可能多的上传。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="IDSample">2. 身份认证</span></h2>
      <dl>
        <dd>您上传的身份证扫描件需和您绑定的身份证一致，否则将无法通过认证。</dd>
      <dd><strong>认证说明：</strong></dd>
      <dd>（1）请您上传您本人身份证原件的正、反两面照片。</dd>
      <dd>（2）本人手持身份证正面头部照（确保身份证上的信息没有被遮挡，避免证件与头部重叠）。</dd>
      <dd>（3）请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
      <dd>每张图片的大小不大于1.5M。</dd>
      <dd><strong>认证有效期：</strong>永久</dd>
      <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/shengfenzheng.jpg?rrdversion=20131013b" target="_blank">身份证正反面照片</a></dd>
        <dd><a href="/static/img/help/id_example_girl.jpg?rrdversion=20131013b" target="_blank">本人手持身份证正面头部照片</a></dd>

      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="creditSample">3. 信用报告</span></h2>
      <dl>
        <dd>个人信用报告是由中国人民银行出具，全面记录个人信用活动，反映个人信用基本状况的文件。本报告是人人贷了解您信用状况的一个重要参考资料。您信用报告内体现的信用记录和信用卡额度等数据，将在您发布借款时经人人贷工作人员整理，在充分保护您隐私的前提下披露给人人贷理财人，作为理财人投标的依据。 </dd>
      <dd><strong>认证说明：</strong></dd>
      <dd>（1）个人信用报告需15日内开具。</dd>
      <dd>（2）上传您的个人信用报告原件的照片。每页信用报告需独立拍照，并将整份信用报告按页码先后顺序完整上传。</dd>
      <dd><a target="_blank" href="http://www.pbccrc.org.cn/zxzx/lxfs/lxfs.shtml">全国各地征信中心联系方式查询</a></dd>
      <dd><a target="_blank" href="http://www.renrendai.com/about/detail.action?noticeId=250">关于互联网查询信用报告试点扩展至9个省的公告</a></dd>
      <dd>（3）请确认您上传的资料是清晰的、未经修改的数码照片或扫描图片。</dd>
      <dd><strong>认证条件：</strong>信用记录良好。</dd>
      <dd><strong>认证有效期：</strong>6个月</dd>
      <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/xinyongbaogao.jpg?rrdversion=20131013b" target="_blank">个人信用报告</a></dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="salarySample">4. 工作认证</span></h2>
      <dl>
        <dd>您的工作状况是人人贷评估您信用状况的主要依据。请您上传真实可靠的工作资料。 </dd>
        <dt>工薪贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>请提交下面任意一项资料：</dd>
        <dd>（1）加盖单位公章的劳动合同。</dd>
        <dd>（2）最近一个月内开具的加盖单位公章的在职证明。</dd>
        <dd><strong>认证条件：</strong>需在现单位工作满3个月。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd>
          <div class="wrapper" style="width: 667px; height: 222px;"><div id="nyroModalContent" style="width: 657px; height: 212px;">
            <div class="layout-box">
                <div class="gray_title f_14">在职证明参考模板</div>
                <div class="cont f_dgray">
                  <div style="padding:5px 0">
                    <div>兹证明 ___姓名____（身份证号：_________________），为_____公司名称_____在职人员,</div>
                    <div>从______年____月____日在我单位入职至今。目前在___________部们，任__________一职，</div>
                    <div>薪酬为________元/月。</div>
                    <div>公司电话：_________________</div>
                    <div>公司地址：_________________</div>
                    <div>联系人：_________________</div>
                    <div>单位名称：_________________</div>
                    <div>日期：_________________</div>
                  </div>
                </div>
                <div class="bot">
                  <b class="cor-l"></b>
                  <b class="cor-r"></b>
                </div>
              </div>
            </div>
          </div>
        </dd>
      </dl>
      <dl id="businessSample">
        <dt>生意贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>请同时提交下面两项资料：</dd>
        <dd>（1）通过年检且注册满1年的营业执照。</dd>
        <dd>（2）经营场地租赁合同＋90天内的租金发票或水电单据。</dd>
        <dd><strong>认证条件：</strong>申请人的企业需经营满1年。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/yingyezhizhao.jpg?rrdversion=20131013b" target="_blank">营业执照</a></dd>
        <dd><a href="/static/img/help/zhizhaofuben.jpg?rrdversion=20131013b" target="_blank">营业执照副本</a></dd>
        <dd><a href="/static/img/help/shuiwudengjizheng.jpg?rrdversion=20131013b" target="_blank">税务登记证</a></dd>
        <dd><a href="/static/img/help/shuiwufuben.jpg?rrdversion=20131013b" target="_blank">税务登记证副本</a></dd>
        <dd><a href="/static/img/help/zuzhijigoudaimazheng.jpg?rrdversion=20131013b" target="_blank">组织机构代码证</a></dd>
        <dd><a href="/static/img/help/zuzhijigoufuben.jpg?rrdversion=20131013b" target="_blank">组织机构代码证副本</a></dd>
        <dd><a href="/static/img/help/dianmianzhaopian.jpg?rrdversion=20131013b" target="_blank">店面照片</a></dd>
        <dd><a href="/static/img/help/changdizulinhetong.jpg?rrdversion=20131013b" target="_blank">场地租赁合同</a></dd>
      </dl>
      <dl>
        <dt>网商贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>网商用户无需上传任何工作认证相关资料，但需进行视频审核，人人贷客服会尽快主动联络您进行视频审核。在审核过程中，需远程展示以下资料：</dd>
        <dd>（1）淘宝/天猫近3个月交易明细或支付宝近12个月账单。</dd>
        <dd>（2）淘宝/天猫的支付宝实名认证页面。</dd>
        <dd>（3）淘宝/天猫信用以及订单借款账户页面。</dd>
        <dd>（4）淘宝/天猫处罚积分页面。</dd>
        <dd><strong>认证条件：</strong>需在淘宝或天猫平台经营网店满半年。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd> 
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="incomeSample">5. 收入认证</span></h2>
      <dl>  
        <dd>您的银行流水单以及完税证明，是证明您收入情况的主要文件，也是人人贷评估您还款能力的主要依据之一。</dd>
        <dt>工薪贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>请提交下面任意一项资料：</dd>
        <dd>（1）可体现工资项的最近连续3个月工资卡银行流水单，或网银电脑截屏。</dd>
        <dd>（2）1个月内打印的带公司名称的最近3个月的社保缴费记录，或最新的可体现缴费状态及公司名称的个人社保账户网络截屏。</dd>
        <dd><strong>认证条件：</strong>申请人近3个月收入在2000以上。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/yinhangliushui.jpg?rrdversion=20131013b" target="_blank">银行卡流水</a></dd>
        <dd><a href="/static/img/help/wangyinjietu.jpg?rrdversion=20131013b" target="_blank">网银截图</a></dd>
      </dl>
      <dl>
        <dt>生意贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>请提交下面任意一项资料：</dd>
        <dd>（1）可体现经营情况的最近连续6个月的个人银行卡流水单，或网银电脑截屏。</dd>
        <dd>（2）可体现经营情况的最近连续6个月企业银行卡流水单，或网银电脑截屏。</dd>
        <dd><strong>认证条件：</strong>申请人提交的流水可反应真实有效的经营情况。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
        <dt>网商贷</dt>
        <dd><strong>认证说明：</strong></dd>
        <dd>网商用户无需上传任何收入认证相关资料，但需通过视频审核，人人贷客服会在线下主动联络您进行视频审核。在审核过程中，请远程展示以下资料：</dd>
        <dd>（1）淘宝/天猫近3个月交易明细或支付宝近12个月账单。</dd>
        <dd>（2）淘宝/天猫的支付宝实名认证页面。</dd>
        <dd>（3）淘宝/天猫信用以及订单借款账户页面。</dd>
        <dd>（4）淘宝/天猫处罚积分页面。</dd>
        <dd><strong>认证条件：</strong>申请人所有的淘宝店近3个月交易总额满3万并且交易笔数超过50笔。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="houseSample">6. 房产认证</span></h2>
      <dl>  
        <dd>房产认证是证明借入者资产及还款能力的重要凭证。              </dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请上传以下任意一项或多项资料。</dd>
        <dd>a）房屋产权证明。</dd>
        <dd>b）购房合同+近3个月的还贷流水。</dd>
        <dd>c）购房发票+近3个月的还贷流水。</dd>
        <dd>d）按揭合同+近3个月的还贷流水。</dd>
        <dd>（2）请确认您上传的资料是清晰的、未经修改的数码照片或彩色扫描图片。</dd>
        <dd>每张图片的尺寸不大于3M。</dd>
        <dd><strong>认证条件：</strong>必须是商品房，且房产是本人名下所有或共有的。</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/fangchanzheng.jpg?rrdversion=20131013b" target="_blank">房产证</a></dd>
        <dd><a href="/static/img/help/goufanghetong.jpg?rrdversion=20131013b" target="_blank">购房合同</a></dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="houseSample">7. 购车认证</span></h2>
      <dl>
        <dd>购车认证是证明借入者资产及还款能力的重要凭证之一。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请上传您所购买车辆行驶证原件的照片。</dd>
        <dd>（2）请上传您和您购买车辆的合影（照片须露出车牌号码）。</dd>
        <dd>（3）请确认您上传的资料是清晰的、未经修改的数码照片或扫描图片。</dd>
        <dd><strong>认证条件：</strong>车辆必须是本人名下所有的。</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/xingshizheng.jpg?rrdversion=20131013b" target="_blank">车辆行驶证</a></dd>
        <dd><a href="/static/img/help/rencheheying.jpg?rrdversion=20131013b" target="_blank">与车辆合影</a></dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="marriageSample">8. 结婚认证</span></h2>
      <dl>  
        <dd>借入者婚姻状况的稳定性，是人人贷考核借款人信用的评估因素之一。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请您上传以下资料</dd>
        <dd>a）您结婚证书原件的照片。</dd>
        <dd>b）您配偶的身份证原件的正反两面照片。</dd>
        <dd>c）您和配偶的近照合影一张。</dd>       
        <dd>（2）请确认您上传的资料是清晰的、未经修改的数码照片或扫描图片。</dd>
        <dd><strong>认证条件：</strong>您的配偶同意您将其个人资料提供给人人贷。</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/jiehunzheng.jpg?rrdversion=20131013b" target="_blank">结婚证</a></dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>9. 学历认证</span></h2>
      <dl>  
        <dd>借出者在选择借款申请投标时，借入者的学历也是一个重要的参考因素。为了让借出者更好、更快地相信您的学历是真实的，强烈建议您对学历进行在线验证。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>一、2001年至今获得学历，需学历证书编号</dd>
        <dd>（1）点击 <a target="_blank" href="http://www.chsi.com.cn/xlcx/">网上学历查询</a>。</dd>
        <dd>（2）选择“零散查询”。</dd>
        <dd>（3）输入证书编号、查询码（通过手机短信获得，为12位学历查询码）、姓名、以及验证码进行查询。</dd>        
        <dd>（4）查询成功后，您将查获得《教育部学历证书电子注册备案表》。</dd>
        <dd>（5）将该表右下角的12位在线验证码（见样本图01），输入下面的文本框。</dd>
        <dd>（6）点击提交审核。</dd>
        <dd>二、1991年至今获得学历，无需学历证书编号</dd>
        <dd>（1）点击 <a target="_blank" href="http://www.chsi.com.cn/xlcx/">网上学历查询</a>。</dd>
        <dd>（2）选择“本人查询”。</dd>
        <dd>（3）注册学信网账号。</dd>        
        <dd>（4）登录学信网，点击“学历信息”。</dd>
        <dd>（5）选择您的最高学历，并点击“申请验证报告”（申请过程中，您需通过手机短信获得12位学历查询码，此查询码与人人贷所需验证码不同）。              </dd>
        <dd>（6）申请成功后，您将获得12位在线验证码（见样本图02）。</dd>
        <dd>（7）将12位在线验证码输入下面的文本框。</dd>
        <dd>（8）点击提交审核。</dd>
        <dd><strong>认证条件：</strong>大专或以上学历（普通全日制）</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
        <dd><strong>认证示例：</strong></dd>
        <dd><a href="/static/img/help/yangbentu1.jpg?rrdversion=20131013b" target="_blank">学历认证-样本图01</a></dd>
        <dd><a href="/static/img/help/yangbentu2.jpg?rrdversion=20131013b" target="_blank">学历认证-样本图02</a></dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>10. 技术职称认证</span></h2>
      <dl>  
        <dd>技术职称是经专家评审、反映一个人专业技术水平并作为聘任专业技术职务依据的一种资格。不与工资挂钩，是人人贷考核借款人信用的评估因素之一。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请上传您的技术职称证书原件照片。</dd>
        <dd>（2）请确认您上传的资料是清晰的、未经修改的数码照片或扫描图片。</dd>
        <dd>每张图片的尺寸不大于1.5M。</dd>
        <dd><strong>认证条件：</strong>国家承认的二级及以上等级证书。例如律师证、会计证、工程师证等。</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
      </dl>
    </div>
    <!--
    <div>
      <h2 class="h4"><span>11. 视频认证</span></h2>
      <dl>  
        <dd>只有通过视频认证您才能获得借款。您可以通过在视频认证页面上传您本人的视频，并提交。也可以选择与人人贷客服在线上进行视频认证。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）视频录制要求</dd>
        <dd>a）视频认证文件大小不得超过50M。</dd>
        <dd>b）请上传真实有效的本人的视频。</dd>
        <dd>c）视频文件格式可以是RMVB、WMV、mp4、AVI等类型的文件。</dd> 
        <dd>d）视频认证必须图像清晰，声音清楚。</dd>       
        <dd>e）视频认证必须衣冠整洁，禁止出现抽烟，赤裸等形象。</dd>       
        <dd>（2）视频录制内容。请针对本次借款录制视频，视频中需包括以下内容</dd>
        <dd>a）首先，请朗读以下文字：我是 ***，我在人人贷的用户名是***，我的身份证号是 ***********************，现在我正在做人人贷的视频确认。我在此做出以下承诺：我愿意接受人人贷的使用条款和借款协议；我提供给人人贷的信息及资料均是真实有效的；我愿意对我在人人贷上的行为承担全部法律责任；在我未能按时归还借款时，我同意人人贷采取法律诉讼、资料曝光等一切必要措施。</dd>
        <dd>b）读完声明后，请您将身份证正面(有身份证号)对准摄像头，并保持5秒。需要保证画面中能同时看到您和您的身份证，并且身份证内容清晰可见。</dd>
        <dd>（3）视频提交办法。您可以选择下列方法之一进行视频认证的提交</dd>
        <dd>a）您可以联系在线QQ客服进行视频文件的提交。</dd>
        <dd>b）您可以将视频文件发送至<a href="mailto:service@renrendai.com">service@renrendai.com</a>，请在邮件中注明您的人人贷用户名及真实姓名。</dd>
        <dd>c）当您通过上述两种方式之一提交过视频认证文件之后，请选择下面的选项并点击“提交审核”。</dd> 
        <dd><strong>认证有效期：</strong>永久</dd>
      </dl>
    </div>
    -->
    <div>
      <h2 class="h4"><span>11. 手机实名认证</span></h2>
      <dl>  
        <dd>手机实名认证需要用户上传手机流水单。手机流水单是用户最近一段时间内的详细通话记录，是人人贷用以验证借入者真实性的重要凭证之一。您的手机详单不会以任何形式被泄露。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请您上传您绑定的手机号码最近3个月的手机详单原件的照片。如详单数量较多可分月打印并上传每月前5日部分（每月详单均需清晰显示机主手机号码）。</dd>
        <dd>（2）请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
        <dd>每张图片的尺寸不大于1.5M。</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
        <dd><strong>如何办理手机详单：</strong>前往最近的手机运营商营业厅，提供手机服务密码或机主身份证明即可打印。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>12. 微博认证</span></h2>
      <dl>  
        <dd>随着网络时代的发展，网络信息已成为了解借入者真实性的最新渠道之一。人人贷与时俱进，将借入者网络关系评估，作为评估借入者的信用的一种方式。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>第一步、成为人人贷粉丝</dd>
        <dd>请点击以下链接，<a target="_blank" href="http://e.weibo.com/renrendai">http://e.weibo.com/renrendai</a>，把人人贷加为关注。</dd>
        <dd>请点击以下链接，<a target="_blank" href="http://t.qq.com/renrendai">http://t.qq.com/renrendai</a>，把人人贷加为关注。</dd>
        <dd>第二步、发送验证信息</dd>
        <dd>（1）在微博上，转发一条最新的人人贷的微博。</dd>
        <dd>（2）并用“私信”功能，发送您的人人贷昵称给人人贷。</dd>
        <dd>第三步、在输入框输入您的新浪微博昵称，并点击提交</dd>
        <dd><strong>认证条件：</strong>50粉丝 + 50微博（目前仅支持新浪微博）</dd>
        <dd><strong>认证有效期：</strong>永久</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>13. 居住地证明</span></h2>
      <dl>  
        <dd>居住地的稳定性，是人人贷考核借款人的主要评估因素之一。</dd>
        <dd><strong>认证说明：</strong></dd>
        <dd>（1）请上传以下任何一项可证明现居住地址的证明文件原件的照片。</dd>
        <dd>a）用您姓名登记的水、电、气最近三期缴费单。</dd>
        <dd>b）用您姓名登记固定电话最近三期缴费单。</dd>
        <dd>c）您的信用卡最近两期的月结单。</dd>
        <dd>d）您的自有房产证明。</dd>
        <dd>e）您父母的房产证明，及证明您和父母关系的证明材料。</dd>
        <dd>（2）请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。</dd>
        <dd>每张图片的尺寸不大于1.5M。</dd>
        <dd><strong>认证有效期：</strong>6个月</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">信用等级与信用额度</h1>
    <div>
      <h2 class="h4"><span id="what-is-credit-level">1. 什么是信用等级？</span></h2>
      <dl>
        <dd>人人贷认证体系包括信用等级和信用额度。信用等级是借款人的信用属性，也是理财人判断借款人违约风险的重要依据之一。通常来讲借款人信用等级越高，其违约率越低，相应的其借款成功率越高。信用等级由认证分数转化而来，具体请参考信用等级的分数区间。目前认证等级的等级由高到低分为：AA、A、B、C、D、E、HR。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 信用等级的分数区间？</span></h2>
      <dl>
        <dd>每个信用等级都有一个信用分数的范围，具体可以见下表：</dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="border-bt">
              <td width="13%">信用等级</td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s HR snow">HR</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s E snow">E</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s D snow">D</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s C snow">C</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s B snow">B</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s A snow">A</i></td>
              <td width="15%"><i class="ui-creditlevel ui-creditlevel-s AA snow">AA</i></td>
            </tr>
            <tr>
              <td>分数区间</td>
              <td>0-99</td>
              <td>100-109</td>
              <td>110-119</td>
              <td>120-129</td>
              <td>130-144</td>
              <td>145-159</td>
              <td>160+</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 什么是信用额度？</span></h2>
      <dl>
        <dd>借款人在通过全部“必要信用认证”后，可以继续上传材料进行各项“可选信用认证”。在人人贷审核员完成对所提供材料的审核工作后，借款人会从人人贷获得一个相应的信用等级和信用额度。信用额度既是借款人单笔借款的上限也是借款者累积尚未还清借款的上限。例如，如果一个借款人信用额度为5万元，则在没有其他借款的情况下，用户可以发布总额最高为5万元的借款请求。也可以分多次发布借款请求，但尚未还清借款（以整笔借款金额计算）的总额不得超过5万元。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 如何获得信用等级及信用额度？</span></h2>
      <dl>  
        <dd>点击“我要借款”，根据用户自身情况，选择一种借款产品申请并提交材料。当用户的借款申请通过审核后即可获得信用等级及信用额度。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 如何查看我的信用等级？</span></h2>
      <dl>  
        <dd>访问“我的人人贷”-“账户管理”-“认证信息”，您就可以看到您的信用等级，及您进行的各种信用认证的情况。</dd>
     </dl>
    </div>
    <div>
      <h2 class="h4"><span>6. 如何提高我的信用等级（分数）？</span></h2>
      <dl>  
        <dd>您可以通过提交“可选信用认证“来提高您的信用分数。另外您在人人贷网站上良好的借贷记录也会增加您的信用分数。</dd>
        <dd>注：提高信用等级可以增加理财人投标的概率，提高借款成功率，我们建议借款人在借款前根据实际情况尽量多完成信用认证。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>7. 为什么我获得了信用等级与信用额度，但我无法申请借款？</span></h2>
      <dl>  
        <dd>您无法申请借款的原因可能是由于没有全部通过四项“必要信用认证”。 </dd>
        <dd>如果还有问题请在工作时间联系在线客服或拨打网站服务热线：400-027-8080</dd>
     </dl>
    </div>
    <div>
      <h2 class="h4"><span>8. 我某一项信用认证被驳回，是否可以进行重新认证？</span></h2>
      <dl>  
        <dd>如果您在某项信用认证中，资料提交发生错误或资料需要更新，您可以重新进行该项信用认证。</dd>
     </dl>
    </div>
    <div>
      <h2 class="h4"><span>9. 为什么我提交的附加信用认证，3个工作日后还没有收到结果？</span></h2>
      <dl>  
        <dd>只有当您通过全部的必要信用认证后，人人贷才会认证您的可选信用认证信息。所以您没有收到结果的原因可能是您没有通过全部的必要信用认证。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">借款审核</h1>
    <div>
      <h2 class="h4"><span>1. 借款审核需要多长时间？</span></h2>
      <dl>
        <dd>审核期限为1-5个工作日，一般在3个工作日内完成。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 怎么联系审核人员？</span></h2>
      <dl>
        <dd>审核人员在需要的时候会主动联系您。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 为什么没有通过审核？</span></h2>
      <dl>
        <dd>根据我们目前的信贷政策，您不符合所有的条件。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 借款审核失败后怎么办？</span></h2>
      <dl>  
        <dd>您可以查看邮件或者联系我们的客服了解审核失败的原因，根据提示信息准备补充个人信息或资料。待满足发布借款条件后，您可以再次发布借款申请。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 如果审批不通过我的申请资料能否还给我？</span></h2>
      <dl>  
        <dd>抱歉，根据行业规范，不能退还。您提交的资料我们会绝对保密。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">借款成功</h1>
    <!--
    <div>
      <h2 class="h4"><span>1. 什么是视频确认？</span></h2>
      <dl>
        <dd>为了保证借款的真实有效，借款人在发布借款需求后需及时进行视频确认。视频确认的内容包括：借款人对自我身份的认证及宣读借款承诺书。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 视频确认的时间及形式？</span></h2>
      <dl>
        <dd>形式1：在借款申请处于等待审核状态（借款进度处于“审核中”状态），借款人可与对应客服人员约定视频确认时间，进行实时视频通话进行确认。</dd>
        <dd>形式2：在借款申请进入筹款阶段，借款人可按网站规定格式、大小及内容自行录制确认视频后上传至相应地址，上传后等待信用审核工作人员查看并予以最终确认。</dd>
      </dl>
    </div>
    -->
    <div>
      <h2 class="h4"><span>1. 什么是借款成功？</span></h2>
      <dl>
        <dd>借款人发布借款申请后，须至少通过必要信用认证，此后借款人会得到相应的信用等级和信用额度。此时借款人的借款申请可被理财人投标，即开始筹集借款。当借款申请满标后，您的借款申请得到放款批准时即为借款成功，您所筹集的资金将划入您的人人贷账户中。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 借款成功后如何提取现金？</span></h2>
      <dl>  
        <dd>当一个借款申请得到放款批准即借款成功后，人人贷将会将您筹集到的资金划入您的人人贷账户。您可在网站上点击“我的人人贷”-“资金管理”-“提现”，进行提现操作。资金将在申请提现后1~2个工作日内到达您指定的银行账户。为了保障您的资金尽快到账，请您使用提现页面推荐的全国性银行申请提现。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">还款</h1>
    <div>
      <h2 class="h4"><span>1. 如何还款？</span></h2>
      <dl>
        <dd>若账户中余额大于当期借款应还金额，在还款日系统会代借款者自动扣缴当期还款。若借款人需要手动还款，请访问“我的人人贷”-“借款管理”-“我的借款”，进行还款操作。</dd>
        <dd>若账户余额不足支付当期还款，可以通过网银为账户充值。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 借款人能否提前还款？</span></h2>
      <dl>
        <dd>2.1. 借款人可以随时进行提前还款。具体的操作方法是访问“我的人人贷”-“借款管理”-“我的借款”，进行提前还款操作。</dd>
        <dd>2.2. 提前还款的用户需要支付给理财人借款剩余本金的1%作为违约金，不用再支付后续的利息及管理费用。公式如下：</dd>
        <dd><img src="/static/img/help/formula/borrow-2.png?rrdversion=20131013b" alt="提前还款应还金额= 剩余本金+当期本息及账户管理费+提前还款违约金"></dd>
        <dd class="text-small">
          <i class="icon-P-inrepay"></i>: 提前还款应还金额<br>
          <i class="icon-Ar"></i>: 剩余本金<br>
          <i class="icon-M-1"></i>: 当期本息及账户管理费<br>
          <i class="icon-M-2"></i>: 提前还款违约金
        </dd>
        <dd>&nbsp;&nbsp;请用户注意提前归还部分借款不视为提前还款，仍需支付全部借款利息及账户管理费。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 借款到期后能否申请延期？</span></h2>
      <dl>
        <dd>借款到期后不可以延期，您可以正常偿还完毕后再次申请。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">逾期还款</h1>
    <div>
      <h2 class="h4"><span>1. 如果逾期还款，会有什么惩罚？</span></h2>
      <dl>
        <dd>如果逾期还款，借款人要承担罚息与逾期后的管理费用，并会被扣去相应的信用分数。所以人人贷强烈建议用户避免逾期还款，一旦发生逾期请尽快还清借款。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 如果逾期还款超过30天，会有什么惩罚？</span></h2>
      <dl>
        <dd>若用户违约逾期还款超过30天，人人贷有权将该用户的有关资料正式备案在“不良信用记录”，列入全国个人信用评级体系的黑名单（“不良信用记录”数据将为银行、电信、担保公司、人才中心等有关机构提供个人不良信用信息）此不良记录将保存7年。同时保留对该用户采取法律措施的权利，由此所产生的所有法律后果和费用（包括但不限于律师费）将由该用户来承担。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 借款逾期后的罚息如何计算？</span></h2>
      <dl>
        <dd>自逾期开始之后，正常利息停止计算。按照下面公式计算罚息：</dd>
        <dd><img src="/static/img/help/formula/borrow-3.png?rrdversion=20131013b" alt="罚息总额 = 逾期本息×对应罚息利率×逾期天数；"></dd>
        <dd class="text-small">
          <i class="icon-P-over"></i>: 罚息总额<br>
          <i class="icon-A-over"></i>: 逾期本息<br>
          <i class="icon-R-p"></i>: 对应罚息利率<br>
          <i class="icon-D-over"></i>: 逾期天数
        </dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="33%">逾期天数</td>
              <td width="33%">1-30天</td>
              <td width="34%">31天以上</td>
            </tr>
            <tr>
              <td>罚息利率</td>
              <td>0.05%</td>
              <td>0.1%</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 借款逾期后的管理费用如何计算？</span></h2>
      <dl>
        <dd>自逾期开始之后，正常管理费用停止计算。按照下面公式计算：</dd>
        <dd><img src="/static/img/help/formula/borrow-4.png?rrdversion=20131013b" alt="逾期后管理费总额=逾期本息×对应逾期管理费率×逾期天数；"></dd>
        <dd class="text-small">
          <i class="icon-P-mgmt"></i>: 逾期管理费<br>
          <i class="icon-A-over"></i>: 逾期本息<br>
          <i class="icon-R-m"></i>: 逾期管理费率<br>
          <i class="icon-D-over"></i>: 逾期天数
        </dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="33%">逾期天数</td>
              <td width="33%">1-30天</td>
              <td width="34%">31天以上</td>
            </tr>
            <tr>
              <td>逾期管理费率</td>
              <td>0.1%</td>
              <td>0.5%</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
  </div>
</div>
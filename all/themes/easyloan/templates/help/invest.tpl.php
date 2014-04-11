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

  <div id="how-to-invest">
    <h1 class="h3 mt15">如何理财（投标注意事项）</h1>
    <div>
      <h2 class="h4"><span id="before-invest">1. 投标前需要注意哪些事项？</span></h2>
      <dl>
        <dd>（1）投标前认真阅读该笔借款的详细信息（包括借款金额，利息率，借款期限、借款者信用等级等），以确定您所要投的标符合您的风险承受能力和所要求的投资回报率。</dd>
        <dd>（2）投标前应知道若您所投标的借款人发生违约，违约损失由投资该标的所有理财人共同承担。</dd>
        <dd>（3）投标前请核实自己将要理财的金额，确认无误后再进行操作。</dd> 
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span>2. 如何分散投标？</span></h2>
      <dl>
        <dd>（1）尽量进行分散投资，这样可降低单一借款人违约对投资收益的影响。例如您可以把5000元借给10个借款人。</dd>
        <dd>（2）在同等收益的情况下投标给信用等级较高的借款人。</dd>
        <dd>（3）在投标时注意了解对应标的保障范围。如保障本金还是保障本金+利息。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 投标后是否可以取消？</span></h2>
      <dl>
        <dd>您在投标后不允许取消。若此标满标并放款后，您账户上的冻结金额自动将转入该标借款人账户。若此标流标，则您账户上的冻结金额自动转为用户可用金额。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 如何收取还款？</span></h2>
      <dl>
        <dd>借款人在规定的还款时间内将钱充值到与人人贷合作的第三方支付平台上，人人贷系统会发送邮件通知所有理财人借款人已成功还款。理财人可按个人需求选择提现或继续投资。  </dd>
        <dd>注：借款人也可能提前偿还全部借款或者在到期日前手动提前偿还借款，请理财人注意查收人人贷发出的通知。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 借款人提前还款怎么办？</span></h2>
      <dl>
        <dd>借款人可以提前偿还借款，如果借款人提前偿还全部借款，需要额外支付给理财人借款剩余本金的1%作为违约金，不用再支付后续的利息及管理费用。</dd>
        <dd>具体计算公式如下：</dd>
        <dd><img src="/static/img/help/formula/invest-2.png?rrdversion=20131013b" alt="提前还款应还金额=剩余本金+当期本息及账户管理费+提前还款违约金"></dd>
        <dd class="text-small">
          <i class="icon-P-inrepay"></i>: 提前还款应还金额<br>
          <i class="icon-Ar"></i>: 剩余本金<br>
          <i class="icon-M-1"></i>: 当期本息及账户管理费<br>
          <i class="icon-M-2"></i>: 提前还款违约金
        </dd>
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span>6. 借款人逾期还款怎么办？</span></h2>
      <dl>
        <dd>自逾期开始之后，正常利息停止计算。按照下面公式计算罚息：</dd>
        <dd><img src="/static/img/help/formula/invest-3.png?rrdversion=20131013b" alt="罚息总额 = 逾期本息×对应罚息利率×逾期天数。"></dd>
        <dd class="text-small">
          <i class="icon-P-over"></i>: 罚息总额<br>
          <i class="icon-A-over"></i>: 逾期本息<br>
          <i class="icon-R-p"></i>: 对应罚息利率<br>
          <i class="icon-D-over"></i>: 逾期天数
        </dd>
        <dd>
          <table width="100%" class="pg-help-table">
            <tbody><tr class="table-tr-color">
              <td width="36%">逾期天数</td>
              <td width="28%">1—30天 </td>
              <td width="36%">31天以上 </td>
            </tr>
            <tr>
              <td>罚息利率 </td>
              <td>0.05% </td>
              <td>0.1% </td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
      <dl>
        <dd>人人贷有一套完善的催收机制，通过电话短信提醒、上门拜访、法律诉讼等多种方式，有效的保证了平台上绝大部分借款人的及时还款。延迟还款的借款人需按约定交纳罚息和违约金。</dd>
      </dl>
    </div>
  </div>

  <div>
    <h1 class="h3 mt15">标的类型介绍</h1>
    <div>
      <h2 class="h4"><span id="what-is-credit-loan">1. 什么是信用认证标？</span></h2>
      <dl>
        <dd>信用认证标是人人贷通过对借款用户的个人信用资质进行全面审核后，允许用户发布的借款标。</dd>     
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="what-is-youxin-loan">2. 什么是实地认证标？</span></h2>
      <dl>
        <dd>实地认证标是人人贷与友众信业金融信息服务（上海）有限公司（以下简称“友信”）共同推出的一款全新产品。该产品延续了人人贷求真务实的经营理念，在原有严格审核的基础上，增加了友信前端工作人员对借款人情况的实地走访、审核调查以及后续的贷中、贷后服务环节，进一步加强风险管理控制，达到了双重保障的效果。</dd>
        <dd>实地认证标相对信用认证标增添了实地认证审核，进一步保障了理财用户资金安全；同时采用本息保障的赔付方式，使得您理财更加省心、放心。</dd>  
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span id="what-is-organization-loan">3. 什么是机构担保标？</span></h2>
      <dl>
        <dd>机构担保标是指人人贷的合作伙伴为相应的借款承担连带保证责任的借款标的。所谓连带保证责任即连带保证人对债务人负连带责任，无论主债务人的财产是否能够清偿债务，债权人均有权要求保证人履行保证义务。</dd>
        <dd>针对机构担保标借款申请人，人人贷会通过严格的审核系统进行双重审核，严控风险。此外，一旦合作伙伴违背其应承担的连带保证责任，根据合作协议人人贷有权通过法律手段进行追偿。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 如果实地认证标逾期，如何处理？</span></h2>
      <dl>
        <dd>在友信风险备用金不足的情况下，人人贷风险备用金将在逾期满30天后立即对未还本金和逾期当期利息进行垫付。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 如果机构担保标逾期，如何处理？</span></h2>
      <dl>
        <dd>合作机构承担借款的连带保证责任，若此类借款逾期，合作机构将替借款人偿付此笔借款的本息及相关费用。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15" id="financial-plan">优选理财计划</h1>
    <div>
      <h2 class="h4"><span>1. 什么是人人贷优选理财计划？</span></h2>
      <dl>
        <dd>优选理财计划是人人贷推出的，以投资人人贷平台现有信贷产品（机构担保标、实地认证标等）为基础的稳健、安全、便捷性好，透明度高的投标计划。加入优选理财计划的资金将优先于平台普通用户的资金，根据计划设定的分散投资原则对人人贷平台产品进行优先投资。</dd>
        <dd>理财人加入优选理财计划后，会进入锁定期。锁定期内，投资的回款本金将继续用于投资直到锁定期结束，充分发挥复利投资的效应。投资所产生的收益可以选择自动提取或随每月回款的本金部分用于再投资，资金利用率高。 </dd>
        <dd>锁定期结束后，理财人可以自由选择退出优选理财计划。如果选择退出优选理财计划，则理财人在该计划内投资的债权将优先进行债权转让。债权转让所得资金及投资回款所得等将不再继续自动投资，系统将在指定时间将此资金转移到用户的主账户或银行卡里。如果锁定期结束，理财人选择继续优选计划，则将延续之前的计划操作，同时理财人在之后的时间享有随时选择退出计划的权利。</dd>
        <dd>理财人的所有投资均适用于平台的本金保障计划，并且具有风险低、收益稳定、信息透明度高等特点。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="fee-on-financial-plan">2. 人人贷优选理财计划有哪些费用？</span></h2>
      <dl>
        <dd>（1）加入费用：a%；加入计划金额的a%，期初额外收取，即加入计划金额为10万元，则另行收取10万元*a% 作为加入计划费用归人人贷所有。</dd>
        <dd>（2）服务费用：b%；即计划中投标所得利息收入的b%作为服务费用归人人贷所有。</dd>
        <dd>（3）退出费用：c%；退出计划时按退出计划金额的c%收取退出费用归人人贷所有，退出费用在资金转出优选理财计划账户时收取。</dd>
        <dd>注：目前优选理财计划的加入费用、服务费用、退出费用均为0。</dd>
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span>3. 如何加入人人贷优选理财计划？</span></h2>
      <dl>
        <dd><strong>（1）加入计划 </strong></dd>
        <dd> 在申请期内，在计划开放额度及加入条件均符合的情况下，可以申请加入理财计划。加入计划后会生成“人人贷理财计划服务协议”。一旦加入计划，立即开始自动优先投标；系统自动使用加入计划的资金进行优先自动投标。投标范围根据该计划设定的标的类型而定。</dd>
        <dd><strong>（2）追加计划 </strong></dd>
        <dd>在申请期内，在计划开放额度和每人额度上限均符合的情况下可以追加资金进入计划，追加计划后您的“人人贷理财计划服务协议”会进行更新，且以最新协议为准。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="plan-loan-investing">4. 优选理财计划是如何自动投标的？</span></h2>
      <dl>
        <dd><strong>（1）即时启动规则</strong>  </dd>
        <dd> 个人加入计划的资金即时启动优先自动投标。一旦加入计划后即刻启动，无需等到申请期结束。</dd>
        <dd><strong>（2）优先自动投标顺序规则</strong>  </dd>
        <dd> 按加入计划的时间先后顺序进行排列，对指定投资范围内的标的，在公开发布前进行优先自动投标。</dd>
        <dd><strong>（3）投标分散性规则</strong>  </dd>
        <dd> 每笔投标金额不超过加入计划金额的某个百分比（如5%），分散风险，人人贷根据市场情况对此参数具有调整的权利。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="plan-profit-handling">5. 在优选理财计划投资过程中产生的收益如何处理？</span></h2>
      <dl>
        <dd>根据计划设定的每月指定日期，将计划内投标所产生的收益进行提取。人人贷提供以下三种收益处理方式：收益再投资、当日提取至人人贷账户或每月定时提取至用户指定的银行卡。其中每月定时自动提取至用户指定银行卡方式，每次提现过程会产生第三方支付平台收取的提现费用，具体参见平台现有收费规则。用户在退出计划前（锁定期内）均可修改收益处理方式。另外，在理财人申请退出计划后，债权转让所得资金及投资回款所得资金等将依用户退出时选择的退出回款方式进行资金转出，退出回款方式一经选定不可修改。 </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="plan-end-handling">6. 优选理财计划到期后如何处理？</span></h2>
      <dl>
        <dd><strong>（1）继续计划</strong></dd>
        <dd>如果锁定期结束后，理财人选择继续优选理财计划，则将延续之前的计划操作。</dd>
        <dd><strong>（2）退出计划</strong></dd>
        <dd> 锁定期结束后可以选择退出计划，退出计划必须全额退出，不能部分退出，选择退出计划后，该计划内的债权将自动进行债权转让（具体转让规则参见下文“债权转让相关说明”）。如果锁定期结束后，不退出计划，则保持原有模式继续投资，但理财人享有随时退出计划的权利。退出时可选择的退出回款方式包括：提取至人人贷主账户和提取至银行卡。具体退出规则参见“优选理财计划说明书——六、退出规则”。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="plan-end-handling">7. 优选理财计划如何退出？</span></h2>
      <dl>
        <dd><strong>（1）退出时间</strong></dd>
        <dd>锁定期结束日的12:00后，该期优选理财计划将进入开放期；理财人可以随时退出处于开放期中的理财计划。</dd>
        <dd><strong>（2）退出规则</strong></dd>
        <dd>理财人只能选择全部退出，不支持部分退出。</dd>
        <dd><strong>（3）退出方式</strong></dd>
        <dd>债权转让（理财计划的债权转让不受90天锁定期的限制，不收取债权转让手续费）</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="plan-end-handling">8. 优选理财退出后的回款方式有哪些？</span></h2>
      <dl>
        <dd>理财人在退出时可选择的退出回款方式包括：提取至人人贷主账户和提取至银行卡，退出回款方式一经选定将无法修改。</dd>
        <dd><strong>（1）提取至人人贷主账户规则</strong></dd>
        <dd>在理财人选择退出优选理财计划后，系统每天定时将优选理财计划账户中的可用资金（含债权转让所得资金及投资回款所得资金等）扣除退出费用后转至理财人主账户，直到优选理财计划持有的债权全部转让完成且优选理财计划账户中的资金全部转至理财人主账户为止。</dd>
        <dd><strong>（2）提取至银行卡规则</strong></dd>
        <dd>在理财人选择退出优选理财计划后，若优选理财计划持有的债权全部转让完成，系统将发起一次提现操作；若没有将全部债权转出，则系统将每7天发起一次提现操作，直至该优选理财计划持有的债权全部转让完成。</dd>
        <dd> 注1：若优选理财计划账户的可用资金不足以支付退出费用和提现费用时，将不进行提现操作；若该优选理财计划持有的债权全部转让完成且账户内的可用资金依然小于1块钱，则将余额转至理财人的主账户。</dd>
        <dd>注2：每次提现至银行卡的费用将由申请退出计划的理财人承担，具体费用详见网站的提现费用说明。</dd>
        <dd>注3：提现至银行卡的资金到账时间与用户发起的一般提现相同，一般为1~2个工作日，具体规则详见网站提现说明。</dd>
      </dl>
    </div>
  </div>
    
  <div>
    <h1 class="h3 mt15">债权转让</h1>
    <div>
      <h2 class="h4"><span id="what-is-loan-transfer">1. 什么是债权转让？</span></h2>
      <dl>
        <dd>指债权持有人通过人人贷债权转让平台将债权挂出且与购买人签订债权转让协议，将所持有的债权转让给购买人的操作。</dd>
        <dd>人人贷平台的债权转让功能旨在帮助广大人人贷平台的理财用户提高投资的流动性，使用户在人人贷的投资体验更加便捷。用户在需要流动资金时，可以通过出售其名下拥有的符合相应条件的债权给其他投资人，从而完成债权转让，获得流动资金。</dd>
        <dd>债权转让过程中，系统会实时给出转让债权的公允价值。为尽快达成债权转让，用户在公允价值的基础上可以对转让债权的剩余未还本金部分进行相应的折价选择，用户确认转让的债权会在债权列表中展示并等待其他理财人购买，在此期间发起转让的用户可以随时选择撤销尚未转让的债权部分。转让完成后，针对发起债权转让的用户，人人贷平台会收取基于成交金额一定比例的债权转让管理费。</dd>
        <dd> 用户在购买转让债权的过程中，既可以全部购买，也可以部分购买,即购买一定份额的债权。购买转让债权的用户可以随时对已获得的债权再次发起债权转让，债权在转让过程中并不限制转让次数。人人贷平台对购买债权的用户在债权转让过程中不收取任何费用。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="how-to-transfer-out">2. 如何转出债权？</span></h2>
      <dl>
        <dd>当理财用户持有的债权处于可转让状态时，理财用户可以在我的人人贷-我的债权-回款中的债权页面、我的人人贷-债权转让-可转让的债权页面进行债权转让操作，填写要转让的份数与转让系数，并确认相关信息后点击确认，即将债权挂出，如有其它用户对此债权进行了购买后即完成转出。用户可以将未成交的债权撤销债权转让。用户也可以在债权转让-可转让的债权页面进行批量债权转让操作，批量债权转让不可以填写份数，执行批量债权转让操作视为所选债权可以全部转让，且转让系数统一设置，不可单独设置。</dd> 
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span id="how-to-transfer-in">3. 如何买入债权？</span></h2>
      <dl>
        <dd>理财用户可以在债权转让列表页面进行购买债权。用户登陆后可以按照份数购买债权，在确认购买份数及金额等信息后点击确定按钮，即完成债权的购买，此笔债权的持有人即发生了变更。购入人可以在已转入的债权或者还款中的债权页面看到买入的债权。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="what-is-loan-value">4. 债权价值是如何计算的？</span></h2>
      <dl>
        <dd> 通常算法：债权出售日待收本金与当日距离上一期还款的天数所对应的利息之和。</dd>
        <dd> 指根据定价公式计算出的债权当前的公允价值，具体计算公式如下：</dd>
        <dd><strong>（1）转让时，当期还款处于未还款状态</strong></dd>
        <dd><img src="/static/img/help/formula/invest-4-1.png?rrdversion=20131013b" alt="债权公允价值=债权的待收本金+应计利息天数/30*当期利息*产品保障类型参数"></dd>
        <dd class="text-small">
          <i class="icon-F"></i>: 债权公允价值<br>
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-D"></i>: 应计利息天数<br>
          <i class="icon-b"></i>: 月利率<br>
          <i class="icon-x"></i>: 产品折让参数, 本息保障类产品为1，本金保障类产品为0
        </dd>
        <dd><img src="/static/img/help/formula/invest-4-2.png?rrdversion=20131013b" alt="债权公允价值=债权的待收本金+应计利息天数/30*当期利息*产品保障类型参数"></dd>
        <dd class="text-small">
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 上期还款对应的应还款日期
        </dd>
        <dd>注：应计利息天数超过30天按30天计算</dd>   
        <dd>注：产品保障类型参数：本金保障的债权为0，本息保障的债权为1。</dd>
        <dd><strong>（2）转让时，当期还款处于已还款状态，但下一期处于未还款状态</strong></dd>
        <dd><img src="/static/img/help/formula/invest-4-3.png?rrdversion=20131013b" alt="债权公允价值=债权的待收本金-债权的待收本金*利息补偿天数/30*月利率*产品保障类型参数"></dd>
        <dd class="text-small">
          <i class="icon-F"></i>: 债权公允价值<br>
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-DD"></i>: 利息补偿天数<br>
          <i class="icon-b"></i>: 月利率
        </dd>
        <dd>注：应计利息天数超过30天按30天计算</dd>   
        <dd>注：产品保障类型参数：本金保障的债权为0，本息保障的债权为1。</dd>
        <dd><img src="/static/img/help/formula/invest-4-6.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-DD"></i>: 利息补偿天数<br>
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 成交日期所在期的应还款日期
        </dd>
        <dd><strong>（3）转让时，当期还款处于已还款状态，且下面的N期处于已还款状态，但还未完全还清</strong></dd>
        <dd><img src="/static/img/help/formula/invest-4-4.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-F"></i>: 债权公允价值<br>
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-DD"></i>: 利息补偿天数<br>
          <i class="icon-b"></i>: 月利率
        </dd>
        <dd><img src="/static/img/help/formula/invest-4-5.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 成交日期所在期的应还款日期<br>
          <i class="icon-t"></i>: 最后还款所在期数与成交日期所在期数之差
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="what-is-loan-price">5. 债权的转让价格是如何确定的？</span></h2>
      <dl>
        <dd><img src="/static/img/help/formula/invest-5-1.png?rrdversion=20131013b" alt="债权价格=债权中剩余本金*转让系数+待收利息部分（或-补偿利息）"></dd>
        <dd>（1）<strong>转让时，当期还款处于未还款状态。</strong></dd>
        <dd><img src="/static/img/help/formula/invest-5-2.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-3.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-4.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-R"></i>: 转让系数<br>
          <i class="icon-b"></i>: 月利率<br>
          <i class="icon-x"></i>: 产品折让参数, 本息保障类产品为1，本金保障类产品为0<br>
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 上期还款对应的应还款日期
        </dd>
        <dd>（2）<strong>转让时，当期还款处于已还款状态，但下一期处于未还款状态。</strong></dd>
        <dd><img src="/static/img/help/formula/invest-5-5.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-6.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-7.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-b"></i>: 月利率<br>
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 成交日期所在期的应还款日期
        </dd>
        <dd>（3）<strong>转让时，当期还款处于已还款状态，且下面的N期处于已还款状态，但还未完全还清。</strong></dd>
        <dd><img src="/static/img/help/formula/invest-5-8.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-9.png?rrdversion=20131013b" alt=""></dd>
        <dd><img src="/static/img/help/formula/invest-5-10.png?rrdversion=20131013b" alt=""></dd>
        <dd class="text-small">
          <i class="icon-Ar"></i>: 剩余未还本金<br>
          <i class="icon-b"></i>: 月利率<br>
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 成交日期所在期的应还款日期<br>
          <i class="icon-t"></i>: 最后还款所在期数与成交日期所在期数之差
        </dd>
      </dl>
    </div>  
    <div>
      <h2 class="h4"><span id="fee-on-loan-transfer">6. 债权转让如何收费？</span></h2>
      <dl>
        <dd>债权转让的费用为转让管理费。平台向转出人收取，不向购买人收取任何费用。转让管理费金额为成交金额*转让管理费率，转让管理费率在目前的运营中按1%收取，具体金额以债权转让页面显示为准。债权转让管理费在成交后直接从成交金额中扣除，不成交平台不向用户收取转让管理费。</dd>
      </dl>
    </div>  
    <div>
      <h2 class="h4"><span id="transferable-loans">7. 什么样的债权可以转让？</span></h2>
      <dl>
        <dd>（1）债权持有90天后即可进行转让。</dd>
        <dd>（2）债权没有处于逾期状态。如转让挂出时没有处于逾期，但在转让中时债权变为逾期状态，系统将会把债权停止转让。</dd>
      </dl>
    </div>      
    <div>
      <h2 class="h4"><span id="loan-value-changed">8. 什么情况下债权的价值会发生变化？</span></h2>
      <dl>
        <dd>（1）当借款人还款后，债权价值的待收本金部分发生变化导致债权发生变化。</dd>
        <dd>（2）当日期发生变化时，债权价值的应计利息部分会发生变化。</dd>
      </dl>
    </div> 
    <div>
      <h2 class="h4"><span id="loan-locked">9. 什么情况下债权会被锁定？</span></h2>
      <dl>
        <dd>（1）在借款人发生还款时，债权会被锁定。</dd>
        <dd>（2）人人贷系统每天进行标的状态(还款中、逾期等)扫描时，债权会被锁定。</dd>
      </dl>
    </div>  
    <div>
      <h2 class="h4"><span id="loan-transfer-failed">10. 什么情况下购买债权会失败？</span></h2>
      <dl>
        <dd>（1）在购买时债权被锁定。</dd>
        <dd>（2）在购买时债权的价值发生了变化。</dd>
        <dd>（3）购买时债权的状态发生了变化，如变为逾期债权、债权已被借款人还清等。</dd>
        <dd>（4）您的账户余额不足。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>11. 什么是应计利息？</span></h2>
      <dl>
        <dd>应计利息：在债权转让过程中，在还款日前售出债权，利息不归转出人所有，不过购买债权的人必须依据上一次还款日至交易日的持有时间按比例给转出人相应的补偿，此补偿的利息称为应计利息。即实际上转出人通过应计利息获得该还款期内其持有此债权的利息，而转入人获得之后持有期的利息。</dd>
        <dd><img src="/static/img/help/formula/invest-11-1.png?rrdversion=20131013b" alt="应计利息=剩余本金*月利率*持有天数/30"></dd>
        <dd><img src="/static/img/help/formula/invest-11-2.png?rrdversion=20131013b" alt="持有天数=min（成交日期-上一还款日，30）"></dd>
        <dd class="text-small">
          <i class="icon-Ar"></i>: 剩余本金<br>
          <i class="icon-b"></i>: 月利率<br>
          <i class="icon-d-now"></i>: 成交日期<br>
          <i class="icon-d-due"></i>: 上一还款日
        </dd>
        <dd>举例：假如A持有一份剩余未还本金为20元的实地认证标，年利率为12%，还款日为每月8号，在6号以100%的转让系数挂出转让（即平价转让）。B在6号成功购买，成交价格包括两部分，即未还本金20元和应计利息20*1%*28/30=0.19元，共计20.19元。成交后</dd>
        <dd>A回收本金20元，收到应计利息0.19元并计入已赚利息，债权转移至B名下，资产减少20元；</dd>
        <dd>B支出20.19元获得此债权，其中债权的待收本金为20元，债权记为资产，同时0.19元为应计利息的支出，记（-0.19）元为已赚利息。等到8号，借款人支付该月还款时，B获得利息收入0.2元，与之前的应计利息支出合计为 0.2+(-0.19)=0.01元；此合计利息即为B于6号购买债权后，持有此债权2天所应获得的利息。</dd>
        <dd>总结：通过债权转让和应计利息的计算，假设该持有期有30天，A获得了28天的利息，B获得了2天的利息。</dd>
      </dl>
    </div>
  </div>
</div>

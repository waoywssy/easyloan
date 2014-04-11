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

<div class="pg-help-main rrdcolor-dimgray-text pg-help-terms p20bs">
  <h1 class="h3">名词解释</h1>
  <div>
    <h2 class="h4"><span>1. 借款用户（借款人）</span></h2>
    <dl>
      <dd>已经或准备在网站上进行借款活动的用户称为借款用户。凡22周岁以上的中国大陆地区公民，都可以成为借款用户。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>2. 理财用户（理财人）</span></h2>
    <dl>
      <dd>已经或准备在网站上进行资金出借活动并完成了实名认证、手机号码绑定和提现密码设置的用户称为理财用户。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span id="what-is-loan">3. 标的 [biāo dì]</span></h2>
    <dl>
      <dd>指借款用户发布的包含其借款相关说明信息的借款申请。一个合格的标的内至少包含：标题、描述、借款用途、借款总额、还款方式、年利率、借款期限、招标期限等基本信息。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>4. 发标</span></h2>
    <dl>  
      <dd>指借款用户发布借款标的的行为。</dd>
   </dl>
  </div>
  <div>
    <h2 class="h4"><span>5. 招标</span></h2>
    <dl>  
      <dd>指标的通过审核进入到投资列表内，此时标的状态为招标。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>6. 投标</span></h2>
    <dl>  
      <dd>指理财用户将其人人贷账户内指定的金额出借给指定的借款用户的行为。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>7. 满标</span></h2>
    <dl>  
      <dd>指一个标的在招标期限内足额筹集到所需资金，等待放款的状态。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>8. 放款</span></h2>
    <dl>  
      <dd>指一个标的满标后且已符合放款标准，该标的所筹资金从出借人账户转入借款人账户的过程，即借款人成功获得了借款。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>9. 流标</span></h2>
    <dl>  
      <dd>指因资料上传不全或综合情况不符合借款要求，导致借款申请未通过，或超过招标期限但未满标的状态叫做流标。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>10. 逾期</span></h2>
    <dl>  
      <dd>指借款用户未按协议约定时间进行足额还款，此时标的状态为逾期。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>11. 严重逾期</span></h2>
    <dl>  
      <dd>逾期时间超过30天时，从第31天开始该标的状态为严重逾期（针对借款用户）。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>12. 垫付</span></h2>
    <dl>  
      <dd>指严重逾期的债权根据人人贷本金保障计划，由人人贷风险准备金代为偿还的动作，垫付完成后债权转移至人人贷名下。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>13. 账户净资产</span></h2>
    <dl>  
      <dd>指用户在人人贷网站的全部资产和负债的总和。</dd>
      <dd>具体计算公式如下：</dd>
      <dd>账户净资产=债权资产+优选理财计划资产+账户余额-借款负债</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span id="avg-capital-plus-interest">14. 等额本息</span></h2>
    <dl>  
      <dd>等额本息还款法是一种被广泛采用的还款方式。在还款期内，每月偿还同等数额的借款(包括本金和利息)。借款人每月还款额中的本金比重逐月递增、利息比重逐月递减。</dd>
      <dd>具体计算公式如下：</dd>
      <dd><img src="/static/img/help/formula/terms-14.png?rrdversion=20131013b" alt="每月还款额=[借款本金×月利率×（1+月利率）^还款总期数]÷[（1+月利率）^还款总期数-1]"></dd>
      <dd class="text-small">
        <i class="icon-P"></i>: 每月还款额<br>
        <i class="icon-A"></i>: 借款本金<br>
        <i class="icon-b"></i>: 月利率<br>
        <i class="icon-n"></i>: 还款总期数
      </dd>
      <dd>因计算中存在四舍五入，最后一期还款金额与之前略有不同。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>15. 加权平均投标利率</span></h2>
    <dl>  
      <dd>由于借款时间不定，人人贷采用加权平均的方式计算借出者的收益率。</dd>
      <dd>具体计算公式如下：</dd>
      <dd><img src="/static/img/help/formula/terms-15.png?rrdversion=20131013b" alt="加权平均投标利率 = (本金1*年利率1+本金2*年利率2+本金3*年利率3+......+本金n*年利率n)/(本金1+本金2+本金3+......+本金n)"></dd>
      <dd class="text-small">
        <i class="icon-Ai"></i>: 第i笔投标的本金<br>
        <i class="icon-Ci"></i>: 第i笔投标的年利率
      </dd>
      <dd>注：此公式未计算可能的资金闲置期。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>16. 债权</span></h2>
    <dl>  
      <dd>指理财用户与借款用户之间的债务约定。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span id="loan-value">17. 债权价值</span></h2>
    <dl>  
      <dd>指根据定价公式计算出的债权当前的公允价值，具体计算公式如下：</dd>
      <dd>通常算法：债权出售日待收本金与当日距离上一期还款的天数所对应的利息之和。</dd>
      <dd><strong>（1）转让时，当期还款处于未还款状态</strong></dd>
      <dd><img src="/static/img/help/formula/terms-17-1.png?rrdversion=20131013b" alt="债权公允价值=剩余未还本金+应计利息天数/30*当期利息*产品折让参数"></dd>
      <dd class="text-small">
        <i class="icon-F"></i>: 债权公允价值<br>
        <i class="icon-Ar"></i>: 剩余未还本金<br>
        <i class="icon-D"></i>: 应计利息天数<br>
        <i class="icon-b"></i>: 月利率<br>
        <i class="icon-x"></i>: 产品折让参数, 本息保障类产品为1，本金保障类产品为0<br>
      </dd>
      <dd><img src="/static/img/help/formula/terms-17-2.png?rrdversion=20131013b" alt="应计利息天数=min[(成交日期-上期还款对应的应还款日期),30]"></dd>
      <dd class="text-small">
        <i class="icon-d-now"></i>: 成交日期<br>
        <i class="icon-d-due"></i>: 上期还款对应的应还款日期
      </dd>
      <dd>产品折让参数：本息保障类产品为1，本金保障类产品为0</dd>
      <dd><strong>（2）转让时，当期还款处于已还款状态，但下一期处于未还款状态</strong></dd>
      <dd><img src="/static/img/help/formula/terms-17-3.png?rrdversion=20131013b" alt="债权公允价值=剩余未还本金-剩余未还本金*利息补偿天数/30*月利率"></dd>
      <dd class="text-small">
        <i class="icon-F"></i>: 债权公允价值<br>
        <i class="icon-Ar"></i>: 剩余未还本金<br>
        <i class="icon-DD"></i>: 利息补偿天数<br>
        <i class="icon-b"></i>: 月利率
      </dd>
      <dd><img src="/static/img/help/formula/terms-17-4.png?rrdversion=20131013b" alt="利息补偿天数=成交日期所在期的应还款日期-成交日期"></dd>
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
    <h2 class="h4"><span>18. 债权价格</span></h2>
    <dl>  
      <dd>指债权转让时的价格。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>19. 债权份数</span></h2>
    <dl>  
      <dd>债权的原始投资金额每50元为一份。</dd>
    </dl>
  </div>
  <div>
    <h2 class="h4"><span>20. 原始投资额</span></h2>
    <dl>  
      <dd>指投标时理财用户的投标金额。</dd>
    </dl>
  </div>
</div>
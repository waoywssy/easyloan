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
    <h1 class="h3">理财人费用</h1>
    <div>
      <h2 class="h4"><span class="">1. 充值费用</span></h2>
      <dl style="display: none;">
        <dd>第三方支付平台将在您充入资金时扣除0.5%作为转账费用。充值费用上限为100元。超过100元的部分由人人贷承担。</dd>
        <dd>注：充值时可以使用一张免费充值券，抵去该笔充值费用。（每位新注册用户（完成绑定身份证、手机号和提现密码）将自动获得一张免费充值券，并可通过参与活动的方式获得更多免费充值券。）</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span id="investor-withdrawn-fee">2. 提现费用</span></h2>
      <dl>
        <dd>当理财人进行提现操作时，会发生提现费用。第三方支付平台将按以下标准收取相关费用。</dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="15%">金额</td>
              <td width="20%">2万元以下</td>
              <td width="30%">2万元（含）- 5万元 </td>
              <td>5万元（含）- 100万元 </td>
            </tr>
            <tr>
              <td>收费</td>
              <td>1元/笔</td>
              <td>3元/笔</td>
              <td>5元/笔</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 优选理财计划费用</span></h2>
      <dl>
        <dd>（1）加入费用：a%。加入计划金额的a%，期初额外收取，即加入计划金额为10万元，则另行收取10万元*a% 作为加入计划费用归人人贷所有。</dd>
        <dd>（2）服务费用：b%。即计划中投标所得利息收入的b%作为服务费用归人人贷所有。</dd>
        <dd>（3）退出费用：c%。退出计划时按退出计划金额的c%收取退出费用归人人贷所有。</dd>
        <dd>注：目前加入费用、服务费用、退出费用均为0。</dd>       
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 债权转让费用</span></h2>
      <dl>  
        <dd>债权转让的费用为转让管理费。平台向转出人收取，不向购买人收取任何费用。转让管理费金额为成交金额*转让管理费率，转让管理费率目前按1%收取，具体金额以债权转让页面显示为准。债权转让管理费在成交后直接从成交金额中扣除，不成交平台不向用户收取转让管理费。</dd>
      </dl>
    </div>
  </div>
  <div>
    <h1 class="h3 mt15">借款人费用</h1>
    <div>
      <h2 class="h4"><span>1. 借款服务费</span></h2>
      <dl>
        <dd>人人贷收取的借款服务费将全部存于风险准备金账户用于人人贷的本金保障计划。服务费将按照借款人的信用等级来收取：</dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="border-bt">
              <td width="16%">信用等级</td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s AA snow">AA</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s A snow">A</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s B snow">B</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s C snow">C</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s D snow">D</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s E snow">E</i></td>
              <td width="12%"><i class="ui-creditlevel ui-creditlevel-s HR snow">HR</i></td>
            </tr>
            <tr>
              <td>费率</td>
              <td>0%</td>
              <td>1%</td>
              <td>1.5%</td>
              <td>2%</td>
              <td>2.5%</td>
              <td>3%</td>
              <td>5%</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>2. 借款管理费</span></h2>
      <dl>
        <dd>人人贷将按照借款人的借款期限，每月向借款人收取其借款本金的0.3%作为借款管理费。</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>3. 提现费用</span></h2>
      <dl>
        <dd>当借款人申请将借款资金转至指定银行账户时，会发生提现费用。第三方支付平台将按以下标准收取相关费用。</dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="25%">金额</td>
              <td width="25%">2万元以下</td>
              <td width="25%">2万元（含）- 5万元 </td>
              <td width="25%">5万元（含）- 100万元 </td>
            </tr>
            <tr>
              <td>收费</td>
              <td>1元/笔</td>
              <td>3元/笔</td>
              <td>5元/笔</td>
            </tr>
          </tbody></table>
        </dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>4. 充值费用</span></h2>
      <dl>  
        <dd>第三方支付平台将在您充入资金时扣除0.5%作为转账费用。充值费用上限为100元。超过100元的部分由人人贷承担。</dd>
        <dd>注：充值时可以使用一张免费充值券，抵去该笔充值费用。（每位新注册用户（完成绑定身份证、手机号和提现密码）将自动获得一张免费充值券，并可通过参与活动的方式获得更多免费充值券。）</dd>
      </dl>
    </div>
    <div>
      <h2 class="h4"><span>5. 逾期罚息</span></h2>
      <dl>  
        <dd>当用户的借款发生逾期时，正常利息停止计算。按照下面公式计算罚息：</dd>
        <dd><img src="/static/img/help/formula/free-5.png?rrdversion=20131013b" alt="罚息总额 = 逾期本息×对应罚息利率×逾期天数；"></dd>
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
              <td width="34%">1-30天</td>
              <td width="33%">31天以上</td>
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
      <h2 class="h4"><span>6. 逾期管理费</span></h2>
      <dl>  
        <dd>用户的借款发生逾期时，正常借款管理费用停止计算。按照下面公式计算：</dd>
        <dd><img src="/static/img/help/formula/free-6.png?rrdversion=20131013b" alt="逾期后管理费总额=逾期本息×对应逾期管理费率×逾期天数；6"></dd>
        <dd class="text-small">
          <i class="icon-P-mgmt"></i>: 逾期管理费<br>
          <i class="icon-A-over"></i>: 逾期本息<br>
          <i class="icon-R-m"></i>: 逾期管理费率<br>
          <i class="icon-D-over"></i>: 逾期天数
        </dd>
        <dd></dd>
        <dd>
          <table class="pg-help-table" width="100%">
            <tbody><tr class="table-tr-color">
              <td width="33%">逾期天数</td>
              <td width="34%">1-30天</td>
              <td width="33%">31天以上</td>
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
    <div>
      <h2 class="h4"><span>7. 人人贷年利率范围</span></h2>
      <dl>
        <dd>
          <p>人人贷目前的利率范围为10%-24%。在人人贷平台上借贷的最高年利率设定为同期银行借款年利率的4倍。且随着银行借款利率的调整，人人贷的利率上限也将随之调整。</p><p>
          </p><p>注：<br>（1）人人贷的利率的调整会在商业银行借款年利率调整后1个月内进行调整。<br>（2）在利率调整之前成功的借款不受调整的影响。</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<?php
//drupal_add_css(drupal_get_path('theme','easyloan') . '/css/account.css');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/tab.css');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/itemlist.css');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/account.js');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/tab.js');
global $base_url;
?>
<div class="color-white-bg" id="withdrawappl">
  <div class="ui-tab ui-tab-transparent" id="withdrawappl-tab">
    <ul class="ui-tab-items">
      <li class="ui-tab-item ui-tab-item-current" data-name="checking">
        <a class="ui-tab-item-link">未发布</a>
      </li>
      <li class="ui-tab-item" data-name="checked">
        <a class="ui-tab-item-link">已发布</a>
      </li>
    </ul>
  </div>
  <div class="p20bs color-white-bg">
    <div id="repayments-tab-content">
      <div class="ui-tab-content ui-tab-content-current fn-clear" data-name="checking">
        <ul class="ui-list ui-list-s repaid" id="repaid-list">
          <li class="ui-list-header color-gray-text fn-clear">
            <span class="ui-list-title w120 ph10 fn-left">借款标题</span>
            <span class="ui-list-title w80 fn-left">借款人</span>
            <span class="ui-list-title w80 fn-left">抵押类型</span>
            <span class="ui-list-title w100 fn-left">借款金额</span>
            <span class="ui-list-title w100 fn-left">借款利息</span>
            <span class="ui-list-title w100 fn-left">年利率</span>
            <span class="ui-list-title w100 fn-left">还款方式</span>
            <span class="ui-list-title w100 fn-left">借款期限</span>
            <span class="ui-list-title w100 fn-left">借款日期</span>
            <span class="ui-list-title w100 fn-left">到期日期</span>
            <span class="ui-list-title w100 fn-left">逾期日利率</span>
            <span class="ui-list-title w100 fn-left">逾期日利率计算方式</span>
            <span class="ui-list-title w100 fn-left">放款日期</span>
            <span class="ui-list-title w100 fn-left"></span>
          </li>
          <li class="ui-list-item fn-clear dark">
            <span class="ui-list-field w120 ph10 fn-left">借钱买房</span>
            <span class="ui-list-field w80 fn-left"><a>习近平</a></span>
            <span class="ui-list-field w80 fn-left">黄金抵押</span>
            <span class="ui-list-field w100 fn-left">1,000,000</span>
            <span class="ui-list-field w100 fn-left">12%</span>
            <span class="ui-list-field w100 fn-left">15%</span>
            <span class="ui-list-field w100 fn-left">一次性还本付息</span>
            <span class="ui-list-field w100 fn-left">18个月</span>
            <span class="ui-list-field w100 fn-left">2014-04-08</span>
            <span class="ui-list-field w100 fn-left">2015-10-08</span>
            <span class="ui-list-field w100 fn-left">20%</span>
            <span class="ui-list-field w100 fn-left">单利</span>
            <span class="ui-list-field w100 fn-left">2014-08-09</span>
            <span class="ui-list-field w100 two-line fn-left">
              <a class="ui-button ui-button-small ui-button-blue">不发布</a>
              <a class="ui-button ui-button-small ui-button-green">立即发布</a>
            </span>
          </li>
          <li class="ui-list-item fn-clear">
            <span class="ui-list-field w120 ph10 fn-left">借钱买房</span>
            <span class="ui-list-field w80 fn-left"><a>习近平</a></span>
            <span class="ui-list-field w80 fn-left">黄金抵押</span>
            <span class="ui-list-field w100 fn-left">1,000,000</span>
            <span class="ui-list-field w100 fn-left">12%</span>
            <span class="ui-list-field w100 fn-left">15%</span>
            <span class="ui-list-field w100 fn-left">一次性还本付息</span>
            <span class="ui-list-field w100 fn-left">18个月</span>
            <span class="ui-list-field w100 fn-left">2014-04-08</span>
            <span class="ui-list-field w100 fn-left">2015-10-08</span>
            <span class="ui-list-field w100 fn-left">20%</span>
            <span class="ui-list-field w100 fn-left">单利</span>
            <span class="ui-list-field w100 fn-left">2014-08-09</span>
            <span class="ui-list-field w100 two-line fn-left">
              <a class="ui-button ui-button-small ui-button-blue">不发布</a>
              <a class="ui-button ui-button-small ui-button-green">立即发布</a>
            </span>
          </li>
          </ul>
        <div class="fn-right mt10 ui-pagination simple-pagination" id="repaid-list-pagination">
          <ul>
            <li class="active"><span class="current prev">Prev</span></li>
            <li class="active"><span class="current">1</span></li>
            <li><a href="#page-2" class="page-link">2</a></li>
            <li><a href="#page-3" class="page-link">3</a></li>
            <li><a href="#page-4" class="page-link">4</a></li>
            <li><a href="#page-5" class="page-link">5</a></li>
            <li class="disabled"><span class="ellipse">…</span></li>
            <li><a href="#page-22" class="page-link">22</a></li>
            <li><a href="#page-23" class="page-link">23</a></li>
            <li><a href="#page-2" class="page-link next">Next</a></li>
          </ul>
        </div>
      </div>
      <div class="ui-tab-content fn-clear" data-name="checked">
        <ul class="ui-list ui-list-s repaid" id="repaid-list">
          <li class="ui-list-header color-gray-text fn-clear">
            <span class="ui-list-title w120 ph10 fn-left">借款标题</span>
            <span class="ui-list-title w80 fn-left">借款人</span>
            <span class="ui-list-title w80 fn-left">抵押类型</span>
            <span class="ui-list-title w100 fn-left">借款金额</span>
            <span class="ui-list-title w100 fn-left">借款利息</span>
            <span class="ui-list-title w100 fn-left">借款年利率</span>
            <span class="ui-list-title w100 fn-left">还款方式</span>
            <span class="ui-list-title w100 fn-left">借款期限</span>
            <span class="ui-list-title w100 fn-left">借款日期</span>
            <span class="ui-list-title w100 fn-left">到期日期</span>
            <span class="ui-list-title w100 fn-left">借款逾期日利率</span>
            <span class="ui-list-title w100 fn-left">借款逾期日利率计算方式</span>
            <span class="ui-list-title w100 fn-left">还清日期</span>
            <span class="ui-list-title w100 fn-left">借款逾期罚金</span>
            <span class="ui-list-title w40 fn-left">投资年利率</span>
            <span class="ui-list-title w40 fn-left">回收方式</span>
            <span class="ui-list-title w40 fn-left">投资期限</span>
            <span class="ui-list-title w40 fn-left">成立日期</span>
            <span class="ui-list-title w40 fn-left">到期日期</span>
            <span class="ui-list-title w40 fn-left">投资逾期日利率</span>
            <span class="ui-list-title w40 fn-left">投资逾期日利率计算方式</span>
            <span class="ui-list-title w40 fn-left">结束日期</span>
            <span class="ui-list-title w40 fn-left">投资逾期罚金</span>
            <span class="ui-list-title w80 fn-left">发布日期</span>
          </li>
          <li class="ui-list-item fn-clear dark">
            <span class="ui-list-field w120 ph10 fn-left"><a>借钱买房</a></span>
            <span class="ui-list-field w80 fn-left"><a>习近平</a></span>
            <span class="ui-list-field w80 fn-left">黄金抵押</span>
            <span class="ui-list-field w100 fn-left">1,000,000</span>
            <span class="ui-list-field w100 fn-left">12%</span>
            <span class="ui-list-field w100 fn-left">15%</span>
            <span class="ui-list-field w100 fn-left">一次性还本付息</span>
            <span class="ui-list-field w100 fn-left">18个月</span>
            <span class="ui-list-field w100 fn-left">2014-04-08</span>
            <span class="ui-list-field w100 fn-left">2015-10-08</span>
            <span class="ui-list-field w100 fn-left">20%</span>
            <span class="ui-list-field w100 fn-left">单利</span>
            <span class="ui-list-field w100 fn-left">2014-08-09</span>
            <span class="ui-list-field w100 two-line fn-left">
              <a class="ui-button ui-button-small ui-button-blue">不发布</a>
              <a class="ui-button ui-button-small ui-button-green">立即发布</a>
            </span>
          </li>
          <!--li class="ui-list-status">
            <p class="color-gray-text">没有记录</p>
          </li-->
          </ul>
        <div class="fn-right mt10" id="repaid-list-pagination">
        </div>
      </div>
    </div>
  </div>
</div>
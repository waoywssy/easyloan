<?php
//drupal_add_css(drupal_get_path('theme','easyloan') . '/css/account.css');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/tab.css');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/account.js');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/tab.js');
global $base_url;
?>
<div class="color-white-bg">
  <div class="ui-tab ui-tab-transparent" id="repayments-tab">
    <ul class="ui-tab-items">
      <li class="ui-tab-item ui-tab-item-current" data-name="checking">
        <a class="ui-tab-item-link">审核中</a>
      </li>
      <li class="ui-tab-item" data-name="checked">
        <a class="ui-tab-item-link">已审核</a>
      </li>
    </ul>
  </div>
  <div class="p20bs color-white-bg">
    <div id="repayments-tab-content">
      <div class="ui-tab-content ui-tab-content-current fn-clear" data-name="checking">
        <ul class="ui-list ui-list-s repaid" id="repaid-list">
          <li class="ui-list-header color-gray-text fn-clear">
            <span class="ui-list-title w120 ph10 fn-left title">借款标题</span>
            <span class="ui-list-title w80 fn-left">借款人</span>
            <span class="ui-list-title w80 fn-left">抵押类型</span>
            <span class="ui-list-title w100 fn-left text-right">计划用款</span>
            <span class="ui-list-title w100 fn-left">计划用款时间</span>
            <span class="ui-list-title w40 fn-left">状态</span>
            <span class="ui-list-title w100 fn-left">申请日期</span>
            <span class="ui-list-title w90 fn-left last">备注</span>
          </li>
          <li class="ui-list-item fn-clear dark">
            <span class="ui-list-field w120 ph10 fn-left"><a>借钱结婚</a></span>
            <span class="ui-list-field w80 fn-left"><a>习近平</a></span>
            <span class="ui-list-field w80 fn-left">房屋商铺</span>
            <span class="ui-list-field w100 fn-left text-right">10，000元</span>
            <span class="ui-list-field w100 fn-left text-center">2014-08-08</span>
            <span class="ui-list-field w40 fn-left">预约</span>
            <span class="ui-list-field w100 fn-left text-center">2014-04-08</span>
            <span class="ui-list-field w90 fn-left last">一定会还钱</span>
          </li>
          <li class="ui-list-item fn-clear">
            <span class="ui-list-field w120 ph10 fn-left"><a>借钱炒房</a></span>
            <span class="ui-list-field w80 fn-left"><a>李克强</a></span>
            <span class="ui-list-field w80 fn-left">机动车抵押</span>
            <span class="ui-list-field w100 fn-left text-right">500，000元</span>
            <span class="ui-list-field w100 fn-left text-center">2014-08-08</span>
            <span class="ui-list-field w40 fn-left">初审</span>
            <span class="ui-list-field w100 fn-left text-center">2014-04-08</span>
            <span class="ui-list-field w90 fn-left last">不一定会还钱</span>
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
            <span class="ui-list-title w120 ph10 fn-left title">借款标题</span>
            <span class="ui-list-title w80 fn-left">借款人</span>
            <span class="ui-list-title w80 fn-left">抵押类型</span>
            <span class="ui-list-title w100 fn-left text-right">计划用款</span>
            <span class="ui-list-title w100 fn-left">计划用款时间</span>
            <span class="ui-list-title w40 fn-left">状态</span>
            <span class="ui-list-title w100 fn-left">申请日期</span>
            <span class="ui-list-title w90 fn-left last">备注</span>
          </li>
          <li class="ui-list-status">
            <p class="color-gray-text">没有记录</p>
          </li>
          </ul>
        <div class="fn-right mt10" id="repaid-list-pagination">
          

        </div>
      </div>
    </div>
  </div>
</div>
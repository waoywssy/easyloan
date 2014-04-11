<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/loan.css');
?>
<div class="pg-loan" id="pg-loan">
  <div class="container_12 mt10">
    <div class="grid_12">
      <div class="loanapp loanapp p20bs color-white-bg">
        <form data-name="loaninfo" enctype="multipart/form-data" class="ui-form" method="post" id="borrowForm" action="/borrow/loan.action" novalidate="novalidate">
          <fieldset>
            <div class="loanboder">
            <legend>机动车抵押借款申请</legend>
            <div class="ui-form-item">
              <label class="ui-label">借款标题</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">机动车品牌</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">生产年份</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
              年
            </div>
            <div class="ui-form-item">
              <label class="ui-label">车辆识别代码(车架号/VIN)</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">出厂日期</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">违章情况</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
              次
            </div>
            <div class="ui-form-item">
              <label class="ui-label">登记日期</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">购车发票价格</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
              元
            </div>
            <div class="ui-form-item">
              <label class="ui-label">颜色</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
            </div>
            <div class="ui-form-item">
              <label class="ui-label">车辆配置</label>
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">手动
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">自动
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">天窗
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">底盘升降
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">倒车雷达
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">导航
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">夜视系统
              <input class="ui-input" type="checkbox" value="" name="borrowTitle" id="borrowTitle">涡轮增压
            </div>
            <div class="ui-form-item">
              <label class="ui-label">行车里程</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
              公里
            </div>
            <div class="ui-form-item">
              <label class="ui-label">过户次数</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">
              次
            </div>
            <div class="ui-form-item">
              <label class="ui-label">国产/进口</label>
              <select name="borrowType" id="borrowType">
                <option value="国产">
                  国产
                </option>
                <option value="进口">
                  进口
                </option>
              </select>
            </div>
            <div class="ui-form-item">
              <label class="ui-label">车况</label>
              <select name="borrowType" id="borrowType">
                <option value="良好">
                  良好
                </option>
                <option value="事故">
                  事故
                </option>
                <option value="轻伤">
                  轻伤
                </option>
              </select>
            </div>
            <div class="ui-form-item">
              <label class="ui-label">来源凭证</label>
              <select name="borrowType" id="borrowType">
                <option value="1">
                  有
                </option>
                <option value="0">
                  无
                </option>
              </select>
            </div>
            <div class="ui-form-item">
              <label class="ui-label">计划用款</label>
              <input class="ui-input" type="text" value="" name="borrowAmount" id="borrowAmount" data-range="3000,500000" data-is="isBorrowAmount" autocomplete="off" disableautocomplete="">元
            </div>
            <div class="ui-form-item">
              <label class="ui-label">计划用款时间</label>
              <input class="ui-input" type="text" value="" name="borrowTitle" id="borrowTitle">月
            </div>
            <div class="ui-form-item">
              <label class="ui-label">借款描述</label>
              <textarea class="ui-textarea" name="borrowDesc" rows="6"></textarea>
            </div>
            <div class="ui-form-item">
              <label class="ui-label">抵押资产说明</label>
              <textarea class="ui-textarea" name="borrowDesc" rows="6"></textarea>
            </div>
            </div>
            <div class="ui-form-item">
              <input name="loanProductType" id="loanProductType" type="hidden" value="RRGXD">
              <input type="submit" class="ui-button ui-button-blue ui-button-mid" value="立即申请">
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
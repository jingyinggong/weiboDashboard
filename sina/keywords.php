<?php
include_once('header.php');
?>

<div id="content-header" class="row-fluid">
  <div class="input-prepend pull-right">
    <span class="add-on">
      <i class="icon-calendar"></i>
    </span>
    <input type="text" readonly id="date-range" value="" />
  </div>
  <div class="btn-group pull-right days-short" data-toggle="buttons-radio">
    <a class="btn active" data-day="1">昨天</a>
    <a class="btn" data-day="7">一周</a>
    <a class="btn" data-day="30">一月</a>
  </div>
  <h1 class="span3">关键词概览</h1>
</div>
<div id="breadcrumb">
  <a href="#" title="Go to Home" class="tip-bottom">
    <i class="icon-home"></i> Dashboard
  </a>
  <a href="#" class="current">关键词概览</a>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box" data-chart-type="pie" id="c1">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>声量对比</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" data-name="关键词1" checked="checked" /> 关键词1</label></li>
              <li><label><input type="checkbox" value="2" data-name="关键词2" checked="checked" /> 关键词2</label></li>
              <li><label><input type="checkbox" value="3" data-name="关键词3" checked="checked" /> 关键词3</label></li>
              <li><label><input type="checkbox" value="4" data-name="关键词4" checked="checked" /> 关键词4</label></li>
              <li><label><input type="checkbox" value="5" data-name="关键词5" /> 关键词5</label></li>
              <li><label><input type="checkbox" value="6" data-name="关键词6" /> 关键词6</label></li>
              <li><label><input type="checkbox" value="7" data-name="关键词7" /> 关键词7</label></li>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart1" data-chart-type="pie">
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box" data-chart-type="pie" id="c2">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>曝光对比</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" data-name="关键词1" checked="checked" /> 关键词1</label></li>
              <li><label><input type="checkbox" value="2" data-name="关键词2" checked="checked" /> 关键词2</label></li>
              <li><label><input type="checkbox" value="3" data-name="关键词3" checked="checked" /> 关键词3</label></li>
              <li><label><input type="checkbox" value="4" data-name="关键词4" checked="checked" /> 关键词4</label></li>
              <li><label><input type="checkbox" value="5" data-name="关键词5" /> 关键词5</label></li>
              <li><label><input type="checkbox" value="6" data-name="关键词6" /> 关键词6</label></li>
              <li><label><input type="checkbox" value="7" data-name="关键词7" /> 关键词7</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart2" data-chart-type="pie">
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box" id="c3">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>评论转发</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" data-name="关键词1" checked="checked" /> 关键词1</label></li>
              <li><label><input type="checkbox" value="2" data-name="关键词2" checked="checked" /> 关键词2</label></li>
              <li><label><input type="checkbox" value="3" data-name="关键词3" checked="checked" /> 关键词3</label></li>
              <li><label><input type="checkbox" value="4" data-name="关键词4" checked="checked" /> 关键词4</label></li>
              <li><label><input type="checkbox" value="5" data-name="关键词5" /> 关键词5</label></li>
              <li><label><input type="checkbox" value="6" data-name="关键词6" /> 关键词6</label></li>
              <li><label><input type="checkbox" value="7" data-name="关键词7" /> 关键词7</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart3">
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>热词排行</h5>
          <div class="pull-right btn-group buttons">
            关键词选择
            <select name="keywords" class="input-small">
              <option value="all" data-name="">全部</option>
              <option value="1">关键字1</option>
              <option value="2">关键字2</option>
              <option value="3">关键字3</option>
              <option value="4">关键字4</option>
              <option value="5">关键字5</option>
              <option value="6">关键字6</option>
              <option value="7">关键字7</option>
            </select>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart-hotwords">
          <table class="table">
            <thead>
              <tr>
                <td>热词排行</td>
                <td class="tr">词频</td>
                <td>热度</td>
              </tr>
            </thead>
            <tbody id="hot-rank">
            </tbody>
          </table>
          <script type="text/template" id="tpl-hotwords">
          <tr>
            <td><span class="badge"><%= order_num %></span> <%= key %></td>
            <td class="tr"><%= num %></td>
            <td>
              <div class="hot-bar">
                <div style="width:<%= percent %>%;"></div>
              </div>
            </td>
          </tr>
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>热门内容</h5>
          <div class="pull-right">
            关键词选择
            <select name="keywords" class="input-small">
              <option value="all" data-name="">全部</option>
              <option value="1">关键字1</option>
              <option value="2">关键字2</option>
              <option value="3">关键字3</option>
              <option value="4">关键字4</option>
              <option value="5">关键字5</option>
              <option value="6">关键字6</option>
              <option value="7">关键字7</option>
            </select>
          </div>
        </div>
        <div class="widget-content nopadding weibo-list" id="hot-posts">
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>评论转发</h5>
          <div class="pull-right">
            关键词选择
            <select name="keywords" class="input-small">
              <option value="all" data-name="">全部</option>
              <option value="1">关键字1</option>
              <option value="2">关键字2</option>
              <option value="3">关键字3</option>
              <option value="4">关键字4</option>
              <option value="5">关键字5</option>
              <option value="6">关键字6</option>
              <option value="7">关键字7</option>
            </select>
          </div>
        </div>
        <div class="widget-content nopadding weibo-list" id="rc-posts">
        </div>
      </div>
      <script type="text/template" id="tpl-weibo-item">
        <dl class="weibo-item">
          <dt>
            <a href="" target="_blank"><img src="<%= uimg %>" /></a>
          </dt>
          <dd>
            <div class="txt">
              <a href=""  target="_blank"><%= name %></a> : <%= text %>
            </div>
            <div class="date-cr">
              <span class="pull-right">
                <a href="" target="_blank">评论（<%= ccount %>）</a> | &nbsp;<a href="" target="_blank">转发（<%= rcount %>）</a>
              </span>
              <a href="" target="_blank"><%= cdate %></a>
            </div>
          </dd>
        </dl>
      </script>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-th"></i>
          </span>
          <h5>关联词列表</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>关键词</th>
                <th>提及量</th>
                <th>曝光数</th>
                <th>正负面比例</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <script type="text/template" id="tpl-keywords-tr">
            <tr>
              <td>
                <div>
                  <a href="<%= keyurl %>"><%= key_name %></a>
                </div>
                <div>
                  <a class="btn btn-primary btn-small" href="<%= key_url %>" class="btn btn-mini btn-primary">查看详情</a>
                </div>
              </td>
              <td class="num">
                <%= statuses %> <span class="<%= statuses_cls %>"> <%= statuses_compare %></span>
              </td>
              <td class="num">
                <%= flashes %> <span class="<%= flashes_cls %>"> <%= flashes_compare %></span>
              </td>
              <td class="num">
                <div class="trends-bar posts-pos">
                  <div class="percent-label">正面微博</div>
                  <div class="percent-bar" style="width: <%= pos_per %>px"></div>
                  <div class="percent-num"><%= pos_num %></div>
                </div>
                <div class="trends-bar  posts-neu">
                  <div class="percent-label">中性微博</div>
                  <div class="percent-bar" style="width: <%= neu_num %>px"></div>
                  <div class="percent-num"><%= neu_num %></div>
                </div>
                <div class="trends-bar  posts-neg">
                  <div class="percent-label">负面微博</div>
                  <div class="percent-bar" style="width: <%= neg_num %>px"></div>
                  <div class="percent-num"><%= neg_num %></div>
                </div>
              </td>
            </tr>
          </script>
          <script type="text/template" id="tpl-pagination">
            <div class="pagination pagination-right">
              <ul>
                <li class="disabled page-first"><a href="javascript:void(0);">«</a></li>
                <li class="disabled page-prev"><a href="javascript:void(0);">&lsaquo;</a></li>
                <li><span><input type="text" class="input-mini" value="1" /> of <strong class="page-total"><%=pages %></strong></span></li>
                <li class="disabled page-next"><a href="javascript:void(0);">&rsaquo;</a></li>
                <li class="disabled page-last"><a href="javascript:void(0);">»</a></li>
              </ul>
            </div>
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div id="footer" class="span12">
      2012 &copy; Unicorn Admin. Brought to you by <a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
    </div>
  </div>
</div>

<script src="/assets/js/highcharts.js"></script>
<script src="/assets/js/jquery.chart.js"></script>
<script src="/assets/js/jquery.renderTpl.js"></script>
<script src="/assets/js/keywords.js"></script>
<?php
include_once('footer.php');
?>

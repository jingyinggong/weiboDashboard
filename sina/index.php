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
  <h1 class="span3">Dashboard</h1>
</div>
<div id="breadcrumb">
  <a href="#" title="Go to Home" class="tip-bottom">
    <i class="icon-home"></i> Home
  </a>
  <a href="#" class="current">Dashboard</a>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box" data-chart-type="line" id="c1">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>新增粉丝趋势</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" checked="checked" data-name="微软1" /> 微软1</label></li>
              <li><label><input type="checkbox" value="2" checked="checked" data-name="微软2" /> 微软2</label></li>
              <li><label><input type="checkbox" value="3" checked="checked" data-name="微软3" /> 微软3</label></li>
              <li><label><input type="checkbox" value="4" checked="checked" data-name="微软4" /> 微软4</label></li>
              <li><label><input type="checkbox" value="5" checked="checked" data-name="微软5" /> 微软5</label></li>
              <li><label><input type="checkbox" value="6" data-name="微软6" /> 微软6</label></li>
              <li><label><input type="checkbox" value="7" data-name="微软7" /> 微软7</label></li>
              <li><label><input type="checkbox" value="8" data-name="微软8" /> 微软8</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart1">
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box" id="c2">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>新增粉丝质量</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" checked="checked" data-name="微软1" /> 微软1</label></li>
              <li><label><input type="checkbox" value="2" checked="checked" data-name="微软2" /> 微软2</label></li>
              <li><label><input type="checkbox" value="3" checked="checked" data-name="微软3" /> 微软3</label></li>
              <li><label><input type="checkbox" value="4" checked="checked" data-name="微软4" /> 微软4</label></li>
              <li><label><input type="checkbox" value="5" checked="checked" data-name="微软5" /> 微软5</label></li>
              <li><label><input type="checkbox" value="6" data-name="微软6" /> 微软6</label></li>
              <li><label><input type="checkbox" value="7" data-name="微软7" /> 微软7</label></li>
              <li><label><input type="checkbox" value="8" data-name="微软8" /> 微软8</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart2">
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
              <li><label><input type="checkbox" value="1" checked="checked" data-name="微软1" /> 微软1</label></li>
              <li><label><input type="checkbox" value="2" checked="checked" data-name="微软2" /> 微软2</label></li>
              <li><label><input type="checkbox" value="3" checked="checked" data-name="微软3" /> 微软3</label></li>
              <li><label><input type="checkbox" value="4" checked="checked" data-name="微软4" /> 微软4</label></li>
              <li><label><input type="checkbox" value="5" checked="checked" data-name="微软5" /> 微软5</label></li>
              <li><label><input type="checkbox" value="6" data-name="微软6" /> 微软6</label></li>
              <li><label><input type="checkbox" value="7" data-name="微软7" /> 微软7</label></li>
              <li><label><input type="checkbox" value="8" data-name="微软8" /> 微软8</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart3">
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="widget-box" id="c4">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-signal"></i>
          </span>
          <h5>曝光对比</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 设置</button>
            <ul class="dropdown-menu drop-check" data-max-select="5">
              <li><label><input type="checkbox" value="1" checked="checked" data-name="微软1" /> 微软1</label></li>
              <li><label><input type="checkbox" value="2" checked="checked" data-name="微软2" /> 微软2</label></li>
              <li><label><input type="checkbox" value="3" checked="checked" data-name="微软3" /> 微软3</label></li>
              <li><label><input type="checkbox" value="4" checked="checked" data-name="微软4" /> 微软4</label></li>
              <li><label><input type="checkbox" value="5" checked="checked" data-name="微软5" /> 微软5</label></li>
              <li><label><input type="checkbox" value="6" data-name="微软6" /> 微软6</label></li>
              <li><label><input type="checkbox" value="7" data-name="微软7" /> 微软7</label></li>
              <li><label><input type="checkbox" value="8" data-name="微软8" /> 微软8</label></li>
            </ul>
          </div>
          <div class="pull-right">
            <select data-pie-select="pie" class="input-small" style="margin-top:3px;">
              <option value="sm_flash_factor" selected>曝光</option>
              <option value="imp1">有效曝光</option>
              <option value="imp2">媒体价值</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
        </div>
        <div class="widget-content nopadding chart" id="chart4">
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="icon-th"></i>
          </span>
          <h5>账号列表</h5>
          <div class="pull-right btn-group buttons">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> 自定义列</button>
            <ul class="dropdown-menu drop-check">
              <li><label><input type="checkbox" value="1" name="custom_column" checked="checked"/> 列1</label></li>
              <li><label><input type="checkbox" value="2" name="custom_column" checked="checked"/> 列2</label></li>
              <li><label><input type="checkbox" value="3" name="custom_column" checked="checked"/> 列3</label></li>
              <li><label><input type="checkbox" value="4" name="custom_column" checked="checked"/> 列4</label></li>
              <li><label><input type="checkbox" value="5" name="custom_column" checked="checked"/> 列5</label></li>
            </ul>
          </div>
        </div>
        <div class="widget-content nopadding">
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>账号</th>
                <th data-col="1" class="order" data-order="funs">新增粉丝 <i></i></th>
                <th data-col="2" class="order" data-order="funs_quality">新增粉丝质量 <i></i></th>
                <th data-col="3" class="order" data-order="posts">发微博 <i></i></th>
                <th data-col="4" class="order" data-order="forwards">转发微博 <i></i></th>
                <th data-col="5" class="order" data-order="imp">曝光数 <i></i></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <script type="text/template" id="tpl-account-tr">
            <tr>
              <td>
                <div class="u-icon">
                  <a href="<%=account_url %>"><img src="/assets/images/1.jpeg" /></a>
                </div>
                <div class="u-name">
                  <div><a href="<%=account_url %>"><%=account_name %></a></div>
                  <a href="<%=account_url %>" class="btn btn-mini btn-primary">查看详情</a>
                </div>
              </td>
              <td data-col="1" class="num">
                <%=funs %> <span class="<%=funs_cls %>" class="tooltip-top" rel="tooltip" title="比较时间范围 2013-1-12 2013-1-30"> <%=funs_compare %></span>
              </td>
              <td data-col="2" class="num">
                <%=funs_quality %> <span class="<%=funs_cls %>" rel="tooltip" class="tooltip-top" title="比较时间范围 2013-1-12 2013-1-30"> <%=funs_quality_compare %></span>
              </td>
              <td data-col="3" class="num">
                <%=posts %> <span class="<%=posts_cls %>" rel="tooltip" class="tooltip-top" title="比较时间范围 2013-1-12 2013-1-30"> <%=posts_compare %></span>
              </td>
              <td data-col="4" class="num">
                <%=forwards %> <span class="<%=forwards_cls %>" rel="tooltip" class="tooltip-top" title="比较时间范围 2013-1-12 2013-1-30"> <%=forwards_compare %></span>
              </td>
              <td data-col="5" class="num">
                <%=imp %> <span class="<%=imp_cls %>" rel="tooltip" class="tooltip-top" title="比较时间范围 2013-1-12 2013-1-30"> <%=imp_compare %></span>
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
<script src="/assets/js/dashboard.js"></script>
<?php
include_once('footer.php');
?>

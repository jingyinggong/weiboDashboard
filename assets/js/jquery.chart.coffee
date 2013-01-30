(->
  Highcharts.setOptions
    global:
      useUTC: false

  chart_common_opt =
    colors: ['#1C77C1', '#4BAA00', '#E04200', '#FEB800', '#00A3E8', '#714286', '#EA5503']
    credits:
      enabled: false
    chart:
      margin: [30, 30, 70, 60]
    title:
      text: ''
    yAxis:
      title:
        text: ''
    exporting:
      enabled: false

  chart_type_opts =
    line:
      chart:
        type: 'line'
      plotOptions:
        line:
          lineWidth: 1
          marker:
            lineWidth: 2
      xAxis:
        type: 'datetime'
    column:
      chart:
        type: 'column'
      legend:
        enabled: false
      xAxis:
        labels:
          rotation: -45
    bar:
      chart:
        type: 'bar'
      plotOptions:
        series:
          stacking: 'normal'
    pie:
      chart:
        type: 'pie'
        margin: [0, 0, 0, 0]
      plotOptions:
        pie:
          allowPointSelect: true
          cursor: 'pointer'


  $.fn.draw_chart = (opt)->
    parser = opt['parseData'] || null
    el = $(@)
    id = opt['id'] || el.find('.chart')[0].id
    data = opt['data'] || null
    type = opt['type'] || 'line'
    chart_opt =
      chart:
        renderTo: id

    draw = (data, el)->
      opts = parser.call(@, data, el)
      $.extend true, opts, chart_opt, chart_common_opt, chart_type_opts[type]
      chartObj = new Highcharts.Chart opts

    draw(data, el)

    el.find(':checkbox, select').change ->
      draw(data, el)

)(jQuery)

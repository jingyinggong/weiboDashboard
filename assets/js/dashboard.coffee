$ ->

  dayT = 1000*60*60*24
  weekT = 1000*60*60*24*7

  getCheckedIdNames = (el)->
    checks = el.find('input:checked')
    items = []
    checks.each (i, v)->
      item =
        name: $(v).data('name')
        id: $(v).val()
      items.push item
    items

  $.ajax
    url: '/sina/api-qushi.php'
    dataType: 'json'
    method: 'get'
    success: (d)->
      $('#c1').draw_chart
        parseData: (d, el)->
          STATIC = 'new_fans_count'
          items = getCheckedIdNames(el)
          arr = _.groupBy d, (obj)-> obj['id']
          arr = _.map arr, (v, k)->
            obj = {}
            obj['id'] = v[0]['id']
            obj['data'] = _.map v, (item)->
              x: item['date']
              y: item[STATIC]
            obj
          arr = _.map items, (v, k)->
            item = _.find arr, (obj)->
              obj['id'] + "" is v['id'] + ""
            item['name'] = v['name']
            item
          min = _.min d, (obj)-> obj[STATIC]
          max = _.max d, (obj)-> obj[STATIC]
          {
            series: arr
            yAxis:
              min: min[STATIC]
              max: max[STATIC]
          }
        data: d

      $('#c2').draw_chart
        parseData: (d, el)->
          items = getCheckedIdNames(el)
          cat = _.map items, (v)->
            v['name']
          arr = _.groupBy d, (obj)-> obj['id']
          arr = _.map arr, (v, k)->
            vs = _.reduce v, (m, o)->
                parseInt(100*(m + o['new_fans_quality']))/100
              , 0
            {
              id: v[0]['id']
              v: vs
            }
          arr = _.map items, (v, k)->
            item = _.find arr, (obj)->
              obj['id'] + "" is v['id'] + ""
            item['v']
          {
            chart:
              type: 'column'
            series:[
                name: 'object1'
                data: arr
              ]
            xAxis:
              categories: cat
          }
        data: d
        type: 'column'

    error: (e)->
      console.log e

  $.ajax
    url: '/sina/api-v-content.php'
    dataType: 'json'
    method: 'get'
    success: (d)->
      $('#c3').draw_chart
        parseData: (d, el)->
          nameObj = { cs: '评论数', rs: '转发数' }
          items = getCheckedIdNames(el)
          cat = _.map items, (v)->
            v['name']
          arr = _.groupBy d, (obj)-> obj['id']
          arr = _.map arr, (v, k)->
            cs = _.reduce v, (m, o)->
                parseInt(100*(m + o['comment_count']))/100
              , 0
            rs = _.reduce v, (m, o)->
                parseInt(100*(m + o['repost_count']))/100
              , 0
            {
              id: v[0]['id']
              cs: cs
              rs: rs
            }
          o = {}
          o.cs = _.map items, (v, k)->
            item = _.find arr, (obj)->
              obj['id'] + "" is v['id'] + ""
            item['cs']
          o.rs = _.map items, (v, k)->
            item = _.find arr, (obj)->
              obj['id'] + "" is v['id'] + ""
            item['rs']
          arr = _.map nameObj, (v, k)->
            {name: v, data: o[k] }
          console.log arr
          {
            chart:
              type: 'column'
            series: arr
            xAxis:
              categories: cat
          }
        data: d
        type: 'bar'
      $('#c4').draw_chart
        parseData: (d, el)->
          items = getCheckedIdNames(el)
          cat = _.map items, (v)->
            v['name']
          select = el.find('select')[0]
          sv = select.value
          txt = select.options[select.selectedIndex].text
          arr = _.groupBy d, (obj)-> obj['id']
          arr = _.map arr, (v, k)->
            values = _.reduce v, (m, o)->
                parseInt(100*(m + o[sv]))/100
              , 0
            {
              id: v[0]['id']
              data: values
            }
          arr = _.map items, (v, k)->
            item = _.find arr, (obj)->
              obj['id'] + "" is v['id'] + ""
            if k is 0
              {
                name: v['name']
                y: item['data']
                sliced: true
                selected: true
              }
            else
              {
                name: v['name']
                y: item['data']
              }
          {
            chart:
              type: 'pie'
            series: [
                type: 'pie'
                name: txt
                data: arr
              ]
            xAxis:
              categories: cat
          }
        data: d
        type: 'pie'

    error: (e)->
      console.log e

  ##table all

  $('[name="custom_column"]').on 'change', (e)->
    o = $ @
    v = o.val()
    checked = o.is(':checked')
    col = o.closest('.widget-box').find('table [data-col=' + v + ']')
    if checked
      col.show()
    else
      col.hide()

  generate_int = ->
    parseInt(Math.random()*95) + 5

  generate_percent = ->
    if (Math.random() > 0.5)
      '+11.3%'
    else
      '-12.3%'

  account_data = _.map [1..501], (i, k)->
    account_url: 'account_url' + i
    account_icon: 'account_icon' + i
    account_name: 'account_name' + i
    funs: generate_int()
    funs_compare: generate_percent()
    funs_quality: generate_int()
    funs_quality_compare: generate_percent()
    posts: generate_int()
    posts_compare: generate_percent()
    forwards: generate_int()
    forwards_compare: generate_percent()
    imp: generate_int()
    imp_compare: generate_percent()

  setClass = (obj, itemName)->
    if (obj[itemName + "_compare"]).match /-/
      obj[itemName + "_cls"] = 'red'
    else
      obj[itemName + "_cls"] = 'green'

  td_vars = ['forwards', 'funs', 'posts', 'imp']
  tpl_tr = $('#tpl-account-tr').html()
  table = $ '.widget-content table'
  tbody = table.find 'tbody'

  _.each account_data, (v, k)->
    _.each td_vars, (i)->
      setClass v, i


  generate_trs = (arr)->
    tbody.empty()
    _.each arr, (v)->
      str = _.template tpl_tr, v
      tbody.append str

  reorder = (arr, item, reversed)->
    ordered = _.sortBy arr, (v)->
      v[item]
    ordered = ordered.reverse() if reversed
    ordered

  th = $ '.widget-content table .order'

  tpl_pagination = $('#tpl-pagination').html()

  init_pagination = (arr, tpl, table)->
    return unless _.isArray(arr)
    pages = Math.ceil(arr.length/20)
    length = arr.length
    tpl = _.template tpl, {pages: pages}
    paginationold = table.next(".pagination")
    if paginationold.length
      paginationold.remove()
    table.after tpl
    $t = table.next('.pagination')
    first = $t.find '.page-first'
    prev = $t.find '.page-prev'
    next = $t.find '.page-next'
    total = $t.find '.page-total'
    cur = $t.find '.input-mini'
    last = $t.find '.page-last'
    disableLinks = ->
      v = parseInt(cur.val())
      if v is 1
        first.addClass('disabled')
        prev.addClass('disabled')
        next.removeClass('disabled')
        last.removeClass('disabled')
      else if v is pages
        first.removeClass('disabled')
        prev.removeClass('disabled')
        next.addClass('disabled')
        last.addClass('disabled')
      else
        first.removeClass('disabled')
        prev.removeClass('disabled')
        next.removeClass('disabled')
        last.removeClass('disabled')
    page_generate_table = ->
      v = parseInt(cur.val())
      if v is pages
        generate_trs arr[(v-1)*20...length]
      else
        generate_trs arr[(v-1)*20...v*20]
    disableLinks()
    page_generate_table()

    cur.keydown (e)->
      c = e.keyCode
      if c is 8 or c is 13 or (c >= 48 and c <=57)
        if c is 13
          cur.blur()
      else
        return false
    cur.keyup (e)->
      o = $(@)
      v = o.val()
      o.val(1) if v < 1 or v > pages
    cur.blur (e)->
      v = $(@).val()
      page_generate_table()
    first.click (e)->
      o = $ @
      return false if o.is('.disabled')
      cur.val(1)
      disableLinks()
      page_generate_table()
    prev.click (e)->
      o = $ @
      return false if o.is('.disabled')
      v = parseInt cur.val()
      cur.val( v - 1)
      disableLinks()
      page_generate_table()
    next.click (e)->
      o = $ @
      return false if o.is('.disabled')
      v = parseInt cur.val()
      cur.val( v + 1)
      disableLinks()
      page_generate_table()
    last.click (e)->
      o = $ @
      return false if o.is('.disabled')
      v = parseInt cur.val()
      cur.val(pages)
      disableLinks()
      page_generate_table()

  set_up_down = (obj)->
    obj.siblings('.order').find('i').removeClass()
    i = obj.find('i')
    if i.is('.icon-arrow-down')
      i.removeClass("icon-arrow-down")
      i.addClass("icon-arrow-up")
    else if i.is('.icon-arrow-up')
      i.removeClass("icon-arrow-up")
      i.addClass("icon-arrow-down")
    else
      i.addClass("icon-arrow-down")

  th.click ->
    o = $ @
    i = o.find('i')
    item = o.data 'order'
    set_up_down o
    is_arrow_down = i.is('.icon-arrow-down')
    x = reorder account_data, item, is_arrow_down
    init_pagination(x, tpl_pagination, table)

  init_pagination account_data, tpl_pagination, table

  $('[rel=tooltip]').tooltip()




  init_date_range = (n = 1)->
    startD = Date.today().add({days: -1*(n+1)})
    endD = Date.today().add({days: -1})
    v = startD.toString('MM/d/yyyy') + ' - ' + endD.toString('MM/d/yyyy')
    $daterange = $('input#date-range')
    clone = $daterange.clone()
    $daterange.replaceWith(clone)
    $daterange = $('input#date-range')
    $daterange.val(v)
    $daterange.daterangepicker
      opens: 'left'
      startDate: startD
      endDate: endD
      maxDate: endD

  init_date_range()

  $('.days-short .btn').click ->
    o = $(@)
    v = o.data('day')
    init_date_range v





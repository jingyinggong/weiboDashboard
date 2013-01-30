$ ->

  getCheckedIdNames = (el)->
    checks = el.find('input:checked')
    items = []
    checks.each (i, v)->
      item =
        id: $(v).val()
        key: $(v).data('name')
      items.push item
    items

  data_pie_parser = (d, el, name)->
    keys = getCheckedIdNames(el)
    arr = _.map keys, (v, k)->
      item = _.find d, (obj)->
        obj['key'] is v['key']
      if k is 0
        {
          name: item['key']
          y: item[name[0]]
          sliced: true
          selected: true
        }
      else
        {
          name: v['key']
          y: item[name[0]]
        }
    {
      chart:
        type: 'pie'
      series: [
          type: 'pie'
          data: arr
          name: name[1]
        ]
    }

  tplhot = $ '#tpl-hotwords'
  rank_show = (opt)->
    tpl = opt['tpl']
    el = opt['el']
    url = opt['url']
    $.ajax
      url: url
      dataType: 'json'
      method: 'get'
      success: (d)->
        arrnames = ['key', 'num']
        arr = _.map d, (v, k)->
          obj = _.object arrnames, v
        arr = _.sortBy arr, (v)->
          v['num']
        arr = arr.reverse()
        total = _.max arr, (v)->
          v['num']
        arr = _.map arr, (v, k)->
          v['order_num'] = k + 1
          v['percent'] = v['num']/total['num']*100
          v
        el.renderTpl
          data: arr
          tpl: tpl
      error: (e)->
        console.log e

  tplposts = $('#tpl-weibo-item')
  posts_show = (opt)->
    tpl = opt['tpl']
    el = opt['el']
    url = opt['url']
    $.ajax
      url: url
      dataType: 'json'
      method: 'get'
      success: (d)->
        el.renderTpl
          data: d
          tpl: tpl
          callback: ->
            console.log $(@)
      error: (e)->
        console.log e

  render_key_words = (opt)->
    url = opt['url']
    data = opt['data']
    callback = opt['callback']
    el = opt['el']
    $.ajax
      url: url
      dataType: 'json'
      method: 'get'
      success: (d)->
        callback(data, d, el)

  key_words_show = (opt)->
    url = opt['url']
    $.ajax
      url: url
      dataType: 'json'
      method: 'get'
      success: (d)->
        $('#c1').draw_chart
          parseData: (d, el)->
            data_pie_parser(d, el, ['statuses', '声量对比'])
          data: d
        $('#c2').draw_chart
          parseData: (d, el)->
            data_pie_parser(d, el, ['flash', '曝光对比'])
          data: d
        $('#c3').draw_chart
          parseData: (d, el)->
            cat = getCheckedIdNames(el)
            cat1 = _.map cat, (v, k)->
              v['key']
            arr = _.map cat, (v, k)->
              item = _.find d, (obj)->
                obj['key'] is v['key']
              item
            keyNames = { 'pos': '正面评论', 'neu': '中性评论', 'neg': '负面评论'  }
            arr = _.map keyNames, (v, k)->
              items = _.map arr, (obj)->
                obj[k]
              {
                name: v
                data: items
              }
            {
              chart:
                type: 'column'
              series: arr
              xAxis:
                categories: cat1
            }
          type: 'bar'
          data: d
        render_key_words
          url: url
          data: d
          el: $('#table-keyword')
          callback: (old_posts, new_posts, container)->
            console.log old_posts
            console.log new_posts
            console.log container
      error: (e)->
        console.log e


  key_words_show
    url: '/sina/api-keywords1.php'

  rank_show
    url: '/sina/api-keywords-hot.php'
    el: $('#hot-rank')
    tpl: tplhot.html()

  posts_show
    el: $('#hot-posts')
    url: '/sina/api-posts-trends.php'
    tpl: tplposts.html()

  posts_show
    el: $('#rc-posts')
    url: '/sina/api-posts-trends.php'
    tpl: tplposts.html()

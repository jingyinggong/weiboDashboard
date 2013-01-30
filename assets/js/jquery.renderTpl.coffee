(->
  $.fn.renderTpl = (opts)->
    el = $(@)
    data = opts['data'] || []
    tpl = opts['tpl'] || ''
    method = opts['method'] || 'append'
    clear = opts['clear'] || true
    fn = opts['callback']

    clear && el.empty()
    _.each data, (v, k)->
      str = _.template(tpl, v)
      el[method](str)
    fn.call(@) if _.isFunction(fn)
)(jQuery)

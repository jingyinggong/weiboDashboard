$ ->
  $dropmenu =  $('.drop-check')
  $droplabel = $dropmenu.find('label')
  $dropcheck = $dropmenu.find(':checkbox')
  $droplabel.click (e)->
    e.stopPropagation()

  $dropcheck.change (e)->
    o = $ @
    ul = o.closest('.drop-check')
    max = ul.data 'max-select'
    return false unless max
    check = ul.find(':checked')
    uncheck = ul.find(':checkbox').not(':checked')
    if check.length >= parseInt(max)
      uncheck.attr('disabled', 'disabled')
    else
      uncheck.removeAttr('disabled')


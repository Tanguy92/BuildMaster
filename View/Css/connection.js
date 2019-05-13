

window.addEventListener("load", function (event) {
  $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
})

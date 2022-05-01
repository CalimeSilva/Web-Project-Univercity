var slideIndex = 0
carosel()
function carosel() {
  var i
  var x = document.getElementsByClassName('Slides')
  for (i = 0; i < x.length; i++) {
    x[i].style.display = 'none'
  }
  slideIndex++
  if (slideIndex > x.length) {
    slideIndex = 1
  }
  x[slideIndex - 1].style.display = 'block'
  setTimeout(carosel, 2000)
}

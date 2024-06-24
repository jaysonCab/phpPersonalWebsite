//image slide in from left, hololive total gen image
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  });
});


const hiddenElements = document.querySelectorAll('.leftImage');
hiddenElements.forEach((el) => observer.observe(el));

const hiddenElements2 = document.querySelectorAll('.memberContainer');
hiddenElements2.forEach((el) => observer.observe(el));

const hiddenElements3 = document.querySelectorAll('.rightImage');
hiddenElements3.forEach((el) => observer.observe(el));

//image slider anime&manga
let next = document.querySelector('.next')
let previous = document.querySelector('.previous')

next.addEventListener('click', function() {
  let items = document.querySelectorAll('.item')
  document.querySelector('.slide').appendChild(items[0])
})

previous.addEventListener('click', function() {
  let items = document.querySelectorAll('.item')
  document.querySelector('.slide').prepend(items[items.length - 1])
})
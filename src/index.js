import '../css/index.scss';

const rightButton = document.querySelector('.move-item-right');
const leftButton = document.querySelector('.move-item-left');

leftButton.addEventListener('click', function () {
  console.log('you clicked me');
  const card = document.querySelectorAll('.the-rail .card');

  card.forEach(function (elem) {
    elem.style.position = 'relative';
    const left = elem.style.left || 0;
    elem.style.left = '-18rem';
  });
});

rightButton.addEventListener('click', function () {
  console.log('you clicked me');
  const card = document.querySelectorAll('.the-rail .card');

  card.forEach(function (elem) {
    elem.style.position = 'relative';
    elem.style.left = '0rem';
  });
});

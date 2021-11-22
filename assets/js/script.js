'use strict';
const dragMap = () => {
  const mapDraggable = document.querySelector("#map");

  mapDraggable.scrollTo({
    top: 0,
    left: mapDraggable.getBoundingClientRect().width
  });

  mapDraggable.onmousedown = () => {
    let pageX = 0;
  
    document.onmousemove = e => {
      if (pageX !== 0) {
        mapDraggable.scrollLeft = mapDraggable.scrollLeft + (pageX - e.pageX);
      }
      pageX = e.pageX;
    };
  
    mapDraggable.onmouseup = () => {
      document.onmousemove = null;
      mapDraggable.onmouseup = null;
    };
  
    mapDraggable.ondragstart = () => {
      return false;
    };
  };
}

const openCloseSelect = (elem) => {
  const btn = document.querySelector('.select-input__button');

  btn.addEventListener('click', () => {
      elem.classList.toggle('d-none');
  })
}

const scrollElemIntoView = (anchors, target) => {
  anchors.forEach((element) => {
    element.addEventListener('click', (event) => {
      event.preventDefault();
      let top = target.getBoundingClientRect().top;

      window.scrollTo({
        top: window.scrollY + top,
        left: 0,
        behavior: 'smooth'
      });
    });
  });
}

const SelectCity = (elem) => {
  const selectOptions = document.querySelector('.select-options');
  const input = document.querySelector('.select-input__item');
  const map = document.querySelector('.map-wrapper');

  elem.addEventListener('click', (event) => {
      const target = event.target;
      const closest =  target.closest('.select-options__link');
     
      if(target.classList.contains('.select-options__link') || closest) {
        event.preventDefault();
        const id = closest.getAttribute('href');
        const elementToScroll = document.getElementById(id.slice(1));
        const visible = document.querySelector('.visible');
        const active = document.querySelectorAll('.active-link');

        if(active.length > 0) {
          active.forEach((e) => {
            e.classList.remove('active-link');
          })
        }

        if(visible) {
          visible.classList.add('d-none');
          visible.classList.remove('visible');
        }

        input.value = closest.textContent.trim() || closest.getAttribute('city').trim();
        const href = closest.getAttribute('href')
        let activeLinks = document.querySelectorAll(`a[href="${href}"]`);

        activeLinks.forEach((e) => {
          e.classList.add('active-link');
        })
       
        selectOptions.classList.add('d-none');
        elementToScroll.classList.remove('d-none');
        elementToScroll.classList.add('visible');

        let position = elementToScroll.getBoundingClientRect();
      
        window.scrollTo({
          top: position.top + window.scrollY - 50,
          left: 0,
          behavior: 'smooth'
        });

        let offsetLeft = (window.innerWidth - position.width) / 2
  
        map.scrollTo({
          top: 0,
          left: position.left - offsetLeft + map.scrollLeft,
        });
       
      }
  });
}

const createPolygon = (data) => {
  const map = document.querySelector('.map-block__map-item');
  const svg = document.createElementNS('http://www.w3.org/2000/svg','svg');

  svg.setAttribute('viewBox', '0 0 1644 1515')
  svg.classList.add('map-polygon');
  map.append(svg);

  data.forEach(element => {
    const polygon = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
    const link = document.createElementNS('http://www.w3.org/2000/svg','a');

    link.setAttribute('href', element.href);
    link.setAttribute('city', element.city)
    link.setAttribute('class', 'select-options__link');
  
    polygon.setAttribute('points', element.points);
    polygon.setAttribute('class', 'st0');
   
    link.append(polygon);
    svg.append(link);
});
}

const getData = (url) => {
    const data = [];
    const elements = document.querySelectorAll('.map-cart__wrapper');
    elements.forEach((e) => {
      const dataPoints = e.getAttribute('data-points');
      const href = '#' + e.getAttribute('id');
      const city = e.querySelector('.cart-heading').textContent.trim();
      const dataItem = {};

      dataItem.points = dataPoints;
      dataItem.href = href;
      dataItem.city = city;

      if(dataItem) {
        data.push(dataItem);
      }
    })
    createPolygon(data);
}


const controllPopup = () => {
  const openBtn = document.querySelector('.video-caller');
  const closeBtn = document.querySelector('.close-popup');
  const popup = document.querySelector('.popup-wrapper');

  openBtn.addEventListener('click', (e) => {
      const target = e.target;
      if(target.closest('.video-caller')) {
        popup.classList.add('active');
        document.body.classList.add('popup-active');
      }
  });

  closeBtn.addEventListener('click', () => {
    popup.classList.remove('active');
    document.body.classList.remove('popup-active');
  });
}


const initApp = () => {
  const selectOptions = document.querySelector('.select-options');
  const mapSelect = document.querySelector('.map-block__map-item');
  const mapAnchors = document.querySelectorAll('[href="#map"]');
  const descAnchors = document.querySelectorAll('[href="#desc"]');
  const targetMap = document.querySelector('.select');
  const targetDescr = document.querySelector('#desc');

  scrollElemIntoView(mapAnchors, targetMap);
  scrollElemIntoView(descAnchors, targetDescr);
  getData();
  dragMap();
  openCloseSelect(selectOptions);
  SelectCity(selectOptions);
  SelectCity(mapSelect);
  controllPopup();
}

document.addEventListener("DOMContentLoaded", initApp());

<? 
$logo = wp_get_attachment_image_url(carbon_get_post_meta( $page_id, 'site_logo'));
$sub_link1 = carbon_get_post_meta( $page_id, 'sub_link1');
$sub_link2 = carbon_get_post_meta( $page_id, 'sub_link2');
?>
<footer class="footer">
      <div class="footer-link__block">
        <a class="footer-logo__link" href="/">
          <img
            class="footer-logo__img"
            src="<? echo $logo ?>"
            alt="Логотип"
          />
        </a>
        <a href="#map" class="map-heading__link">
          <h2 class="map-heading"><?echo $sub_link2?></h2>
          <div class="pattern-center"></div>
        </a>
        <a href="#desc" class="map-descripiton"><?echo $sub_link1?></a>
      </div>
    </footer>
    <div class="left-line">
      <svg
        class="line-arrow__top"
        width="12"
        height="24"
        viewBox="0 0 12 24"
        fill="#C09068"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z"
          stroke="#C09068"
          stroke-linejoin="round"
        ></path>
      </svg>
      <svg
        class="line-arrow__bottom"
        width="12"
        height="24"
        viewBox="0 0 12 24"
        fill="#C09068"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z"
          stroke="#C09068"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <div class="right-line">
      <svg
        class="line-arrow__top"
        width="12"
        height="24"
        viewBox="0 0 12 24"
        fill="#C09068"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z"
          stroke="#C09068"
          stroke-linejoin="round"
        ></path>
      </svg>
      <svg
        class="line-arrow__bottom"
        width="12"
        height="24"
        viewBox="0 0 12 24"
        fill="#C09068"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z"
          stroke="#C09068"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <div class="pattern-wrapper pattern-wrapper__bottom">
      <div class="pattern pattern-left pattern-left__bottom">
        <div class="pattern-img__left pattern-img"></div>
        <div class="pattern-line pattern-bottom-line">
          <div class="arrow-left"></div>
          <div class="arrow-right"></div>
        </div>
      </div>
      <div class="dot"></div>
      <div class="pattern pattern-right pattern-right__bottom">
        <div class="pattern-line pattern-bottom-line">
          <div class="arrow-left"></div>
          <div class="arrow-right"></div>
        </div>
        <div class="pattern-img__right pattern-img"></div>
      </div>
    </div>
    <div class="popup-wrapper">
        <div class="popup">
            <div class="popup-head">
                <button class="popup-controll close-popup">
                    Закрыть
                </button>
            </div>
            <div class="popup-body">
              <div class="pattern">
                <div class="popup-top__line popup-line">
                  <div class="white-block"></div>
                  <div class="arrow-right"></div>
                  <div class="arrow-left"></div>
                </div>
                <div class="popup-bottom__line popup-line">
                  <div class="arrow-right"></div>
                  <div class="arrow-left"></div>
                </div>
                <div class="popup-left__line popup-line">
                  <svg class="line-arrow__top" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
                  </svg>
                  <svg class="line-arrow__bottom" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
                  </svg>
                  <div class="dot-wrapper">
                    <div class="dot"></div>
                  </div>
                </div>
                <div class="popup-right__line popup-line">
                  <svg class="line-arrow__bottom" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
                  </svg>
                  <svg class="line-arrow__top" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
                  </svg>
                  <div class="dot-wrapper">
                    <div class="dot"></div>
                  </div>
                </div>
                <div class="left-top__pattern popup-pattern">
                </div>
                <div class="right-top__pattern popup-pattern"></div>
                <div class="left-bottom__pattern popup-pattern"></div>
                <div class="right-bottom__pattern popup-pattern"></div>
              </div>
                <div class="popup-content__text">
                    <div class="popup-content__head">
                        <div class="popup-heading__block">
                            <h2 class="popup-heading">
                                Поздравление Губернатора Самарской области Д.И. Азарова
                            </h2>
                        </div>
                        <div class="popup-photo__block">
                            <div class="popup-img__wrapper">
                              <div class="img-border">
                              <img class="popup-photo__img" src="<? echo get_template_directory_uri(); ?>/assets/img/guberFace.jpg" alt="Губернатор Д.И. Азаров">
                                    <div class="border-left"></div>
                                    <div class="border-bottom"></div>
                                    <div class="border-pattern"></div>
                            
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup-content__body">
                        <blockquote class="gubernator-cite">
                            <p class="cite-p">
                                с Днем Самарской губернии (13 января 2021 года)
                            </p>
                            <p class="cite-p">Дорогие самарцы!</p>
                            <p class="cite-p">
                                От всей души, тепло и сердечно поздравляю вас со знаменательным праздником – 170-летним юбилеем Самарской губернии!
                            </p>
                            <p class="cite-p">
                                Знать и ценить историю нашей малой Родины, годиться свершениями, преумножать всё то, что восхищает и вдохновляет нас - значит не только проявлять уважение к делам поколений наших предков, но и строить свое будущее, опираясь на трудовые и ратные подвиги, вековые нравственные ценности и традиции.

                            </p>
                            <p class="cite-p">
                                Наш край уникален. За 170 лет из сугубо аграрной территории область превратилась в один из ведущих промышленных, логистических, научных, культурных центров страны. Дважды за эти годы губерния приобретала столичный статус и всегда оставалась опорным регионом державы. Неоднократно именно здесь происходили события, которые оказывали решающее влияние на жизнь Поволжья и всей России.

                            </p>
                            <p class="cite-p">
                                Выдающуюся роль сыграла Самарская область в сфере освоения космического пространства, что вызывает особую гордость в год 60-летия первого полёта в космос. Именно на нашей ракете-носителе Юрий Алексеевич Гагарин совершил свой первый героический полёт. И сегодня 80% пилотируемых спусков в мире совершаются на ракетах Самарского производства.

                            </p>
                            <p class="cite-p">
                                Дорогие земляки! Глубоко убежден: невозможно любить то, чего не знаешь. И чем больше мы узнаем о нашей губернии, о нашем главном достоянии – веками хранимой дружбе народов и природном богатстве волжских просторов, - тем большей гордостью проникаемся за родную землю и нашу Великую Россию.

                            </p>
                            <p class="cite-p">
                                Не сомневаюсь: присущее нам чувство патриотизма, стремление к позитивным переменам и огромное желание сделать нашу губернию благодатным краем, регионом-лидером – и есть та созидательная сила, которая всегда позволяла нашим землякам выполнять задачи государственной важности. И сегодня мы занимаем ведущие позиции по реализации нацпроектов, инициированных Президентом России Владимиром Владимировичем Путиным, успешно претворяем в жизнь Стратегию лидерства Самарской области, которую мы создали вместе с вами. Именно так, сплоченно, объединив усилия, мы можем достичь самых смелых высот, обеспечить достойное качество жизни в городах и сёлах и процветание любимой губернии. Мы не раз доказывали, что невыполнимых задач для нас нет. Побеждать - это по-самарски!

                            </p>
                            <p class="cite-p">Дорогие друзья! Возможность работать во благо родной земли — это огромная честь и ответственность. Искренне благодарю вас за взаимную поддержку, добросердечие и трудолюбие. От всей души желаю крепкого здоровья, счастья, мира, добра, благополучия и успехов во всех делах и начинаниях!</p>
                            <cite>Губернатор Самарской области Д.И. Азаров</cite>
                        </blockquote>
                    </div>
            </div>
        </div>
    </div>
    <? wp_footer(); ?>
  </body>
</html>

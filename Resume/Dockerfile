FROM nginx:latest
WORKDIR /usr/share/nginx/html
COPY index.html .
COPY connect.php .
COPY styles.html .
COPY AslihanAkbulutcv.pdf .
COPY site.webmanifest .
COPY /css/styles.css css/
COPY /css/vendor.css css/
COPY /js/main.js js/
COPY /js/plugins.js js/
COPY /js/vendor/fontawesome/all.min.js js/
COPY /images/header-bg-sm.jpg images/
COPY /images/me.png images/
COPY /images/portfolio/animal.jpg images/portfolio/
COPY /images/portfolio/library.jpg images/portfolio/
COPY /images/portfolio/mobile.jpg images/portfolio/
COPY /images/portfolio/office.jpg images/portfolio/
COPY /images/portfolio/gallery/g-animal.jpg images/portfolio/gallery/
COPY /images/portfolio/gallery/g-library.jpg images/portfolio/gallery/
COPY /images/portfolio/gallery/g-mobile.jpg images/portfolio/gallery/
COPY /images/portfolio/gallery/g-office.jpg images/portfolio/gallery/
COPY /images/icons/icon-close.svg images/icons/
COPY /images/icons/icon-quote.svg images/icons/
COPY /images/icons/icon-tag.svg images/icons/
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]


  const galleryItems = document.querySelectorAll('.gallery-item');

galleryItems.forEach(item => {
  item.addEventListener('click', () => {
    // Get the image element inside the gallery item
    const image = item.querySelector('img'); 

    // Get the image source
    const imageSrc = image.src; 

    // Now you have the image source (imageSrc)
    // Use it to open your lightbox or modal
    // ... (Your lightbox or modal opening logic here) 
  });
});


galleryItems.forEach(item => {
    item.addEventListener('click', () => {
      const image = item.querySelector('img');
      const imageSrc = image.src;
  
      $.lightbox({
        image: imageSrc
      });
    });
  });

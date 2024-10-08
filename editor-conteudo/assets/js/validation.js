// Gerador de metatags
$(document).ready(function() {
  function updateMetaTags() {
      const title = $('#title').val();
      const description = $('#description').val();
      const keywords = $('#keywords').val();
      const author = $('#author').val();
      const image = $('#image').val();

      let metaTags = '';

      // Meta tags Google
      metaTags += `<meta name="title" content="${title}">\n`;
      metaTags += `<meta name="description" content="${description}">\n`;
      metaTags += `<meta name="keywords" content="${keywords}">\n`;
      metaTags += `<meta name="author" content="${author}">\n`;

      // Meta tags Facebook (Open Graph)
      metaTags += `<meta property="og:title" content="${title}">\n`;
      metaTags += `<meta property="og:description" content="${description}">\n`;
      if (image) {
          metaTags += `<meta property="og:image" content="${image}">\n`;
      }
      metaTags += `<meta property="og:type" content="website">\n`;
      metaTags += `<meta property="og:locale" content="en_US">\n`;

      // Meta tags Twitter
      metaTags += `<meta name="twitter:title" content="${title}">\n`;
      metaTags += `<meta name="twitter:description" content="${description}">\n`;
      if (image) {
          metaTags += `<meta name="twitter:image" content="${image}">\n`;
      }
      metaTags += `<meta name="twitter:card" content="summary_large_image">\n`;

      $('#metaTagsOutput').text(metaTags);
  }

  // Atualiza as meta tags enquanto digita nos inputs
  $('#metaForm input').on('input', updateMetaTags);
});

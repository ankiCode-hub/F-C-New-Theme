const buttons = $('.cardbtn');

const cards = $('.cards');

buttons.each(function() {
  $(this).on('click', function() {
    const targetCardId = $(this).data('card');

    cards.each(function() {
      if ($(this).attr('id') === targetCardId) {
        $(this).fadeIn(150);
      } else {
        $(this).fadeOut(150);
      }
    });
  });
});


function showCard(cardId) {
  const cards = $('.cards');

  cards.each(function() {
    if ($(this).attr('id') === cardId) {
      $(this).fadeIn(150);
    } else {
      $(this).fadeOut(150);
    }
  });
}

function showNextCard() {
  const buttons = $('.cardbtn');
  const cards = $('.cards');

  const activeCard = cards.filter(':visible');
  const activeCardId = activeCard.attr('id');
  console.log(activeCardId)
  if(activeCardId=="General"){
    alert("g")
  }

  
  if (activeCard.length === 0) {
    cards.first().fadeIn(150);
  } else {
  
    const activeIndex = cards.index(activeCard);

  
    const nextIndex = activeIndex + 1;

  
    if (nextIndex < cards.length) {
      cards.eq(activeIndex).fadeOut(150, function() {
        cards.eq(nextIndex).fadeIn(150);
      });
    }
  }
}

$('#next-btn').on('click', showNextCard);


function previewImage(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('.uploadButton-file-name').html('<img src="'+e.target.result+'" style="max-width: 100%;"/>');
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$('#upload').change(function() {
  previewImage(this);
});
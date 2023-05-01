// Get all buttons
const buttons = $('.cardbtn');

// Get all cards
const cards = $('.cards');

// Loop through all buttons
buttons.each(function() {
  // Add click event listener
  $(this).on('click', function() {
    // Get the target card ID from the data-card attribute
    const targetCardId = $(this).data('card');

    // Loop through all cards
    cards.each(function() {
      // If the card ID matches the target card ID, show it with a fade-in effect, otherwise hide it with a fade-out effect
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

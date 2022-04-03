afterAction: function(){
  if ( this.itemsAmount > this.visibleItems.length ) {
    $('.next').show();
    $('.prev').show();

    $('.next').removeClass('disabled');
    $('.prev').removeClass('disabled');
    if ( this.currentItem == 0 ) {
      $('.prev').addClass('disabled');
    }
    if ( this.currentItem == this.maximumItem ) {
      $('.next').addClass('disabled');
    }

  } else {
    $('.next').hide();
    $('.prev').hide();
  }
}
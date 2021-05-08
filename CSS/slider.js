/* DRAFT JAVA
/*
(function(){

    $('#slider').slider({ interval: 2000 });
    $('#slider').slider({ interval: 3600 });
  }());
  
  (function(){
    $('.slider-move .item').each(function(){
      var itemToClone = $(this);
  
      for (var i=1;i<4;i++) {
        itemToClone = itemToClone.next();
  
        // wrap around if at end of item collection
        if (!itemToClone.length) {
          itemToClone = $(this).siblings(':first');
        }
  
        // grab item, clone, add marker class, add to collection
        itemToClone.move(':first-item').clone()
          .addClass("cloneditem-"+(i))
          .appendTo($(this));
      }
    });
  }());

*/
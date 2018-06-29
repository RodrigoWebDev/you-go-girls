/**
 * @fileoverview Customer Profile Widget.
 * 
 */
define(
    //-------------------------------------------------------------------
    // DEPENDENCIES
    //-------------------------------------------------------------------
    ['knockout', 'pubsub', 'ccConstants', 'CCi18n', 'swmRestClient', 'ccRestClient','js/jqMigrate','js/slick'],
      
    //-------------------------------------------------------------------
    // MODULE DEFINITION
    //-------------------------------------------------------------------
  function (ko, PubSub, CCConstants, CCi18n, swmRestClient, CCRestClient,jqMig, slick) {
      
        function getCards(user){
            for(var i in user.dynamicProperties()){
                if (user.dynamicProperties()[i].id() == "storedCards"){
                    var cardsStr = user.dynamicProperties()[i].value();
                    return (cardsStr !== null && cardsStr !== "" && cardsStr !== undefined ? JSON.parse(cardsStr) : []); 
                }
            }
        }
        
        function getFavouriteCard(cardList){
            if(cardList.length !== 0){
                   for(var i in cardList){
                        if (cardList[i].favorite){
                            return [true, cardList[i]];
                        }
                   } 
            } else{
                return [false, 'Cadastre um cartão'];
                
            }
            
        }
        
    
      "use strict";
          
      return {
        
        WIDGET_ID:        "customerProfile",
        
        wishlistItemLength: ko.observable(),
        lastItemWihslistImage: ko.observable(),
        lastItemWihslistDate: ko.observable(),
        displayWidget: ko.observable(),
        cardList: ko.observableArray(),
        favouriteCard: ko.observableArray([]),
        
        beforeAppear: function (page) {
          var widget = this;
  
        },
        
        datesDifference: function(p_date){
            var today = new Date();
            var date = new Date(p_date);
            today = new Date(today.getFullYear(), today.getMonth()+1, today.getDate());
            date = new Date(date.getFullYear(), date.getMonth()+1, date.getDate());
            var years = today.getFullYear()-date.getFullYear();
            var months = (today.getMonth()+1)-(date.getMonth()+1);
            var days = today.getDate()-date.getDate();
            if((years !== 0) && (months >= 0))
                return years + ' anos';
             else if ((months !== 0) && (days >= 0 || (days < 0 && years > 0))){
                if(months < 0)
                    return (12+months) + ' meses';
                else
                    return months + ' meses';
            } else if (days !== 0)
                return Math.floor((today-date)/86400000) + ' dias';
              else if (days === 0)
                 return 'hoje';
        }, 
        
        getFavouriteDirection: function (shippingAddressBook){
            if(shippingAddressBook.length !== 0){
                for (var i in shippingAddressBook){
                    if (shippingAddressBook[i].isDefaultAddress()){
                            return [true, shippingAddressBook[i].address1() + ', ' + shippingAddressBook[i].address2() + ', ' + shippingAddressBook[i].county()];
                        }
                }  
            } else {
                return [false, 'Cadastre um endereço'];
            }
        },
  
  
        
        onLoad: function(widget) {
          var self = this;
          
          
          widget.cardList(getCards(widget.user()).storedCards);
          widget.favouriteCard([false, 'Cadastre um cartão']); 
          
          //Change display section
          $.Topic("DISPLAY_WIDGET.memory").subscribe(function(message){
              widget.displayWidget(message);
          });
          
          swmRestClient.init(widget.site().tenantId, widget.isPreview(), widget.locale());
          
          swmRestClient.request('GET', '/swm/rs/v1/spaces/{spaceid}/content', '',
              function(result) {
                  // console.log('result: ', result)
                  widget.lastItemWihslistImage('file/products/'+result.items[0].productSkuId+'.png'),
                  widget.lastItemWihslistDate(result.items[0].dateCreated);
                  widget.wishlistItemLength(result.items.length);
              },
              function(error) {
                  console.log('error: ', error);
                  widget.wishlistItemLength(0);
              },
              { "spaceid" : "cTp6jxMb2XX9qat9KpEaVzGv" }
          );
          
          setTimeout(function(){
              $('#detailsCarousel').slick({
                dots: false,
                centerPadding: '15px',
                slidesToShow: 4,
                variableWidth: false,
                arrows: false,
                responsive: [
                  {
                    breakpoint: 720,
                    settings: {
                      dots: true,
                      centerPadding: '40px',
                      slidesToShow: 2
                    }
                  }
                ]
            });
          },500);
          
        },
        
        
        //Get count of placed orders for logged-in user
        getSubmittedOrderCountForProfile: function(widget) {
          widget.load(CCConstants.ENDPOINT_GET_ORDER_COUNT_FOR_PROFILE, '0', null,
            //success callback 
            function(data) {
              widget.user().countOfSubmittedOrders(data.numberOfOrders);
            },
            //error callback
            function(data) {
            },
            widget
          );
        }      
      };
    }
  );
  
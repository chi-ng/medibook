/* js file for datepicker */ 
  $(function() {
    /* create an array to store holiday dates */ 
    var holidays =["2019-01-01", "2019-02-01", "2019-04-19", "2019-04-22", "2019-05-06", "2019-12-25", "22019-12-26"];
    $( "#calendar" ).datepicker({
      /* use minDate to disable dates and months that has already passed from today */
      minDate: -0,
      /* change the date format*/ 
      dateFormat: "DD dd-mm-yy",
      /* highlight the holidays */ 
      beforeShowDay: function(date){
        var day = date.getDay();
        if (day ==0 || day ==6) /* if the day is Sunday , Saturday */
        {
          /*return [true, "markholiday"]; /* then mark red */ 
          return [day ==-1]
          
        }
        /* highlight holidays in red */
        else {
          var formattedDate = jQuery.datepicker.formatDate("yy-mm-dd", date);
          /* disable holidays date */
          return [holidays.indexOf(formattedDate)==-1]
          
          
        }
      }
      
    });
    /* js for timepicker */
    $('#time1,#time2,#time3').timepicker({
      'disableTimeRanges': [
        ['1pm', '2pm'],
    ],
      timeFormat: 'H:MM',
      minTime: '9',
      maxTime: '17:00',
      scrollDefault: 'now'
      
      


      

      
    });
  } ); 

 

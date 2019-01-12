var selector = "#wodbody";
var apiKey = "ia3c8iuzwqri70koe34864h3k";
var wodLocation = "CrossFit Of Aces";
var wodProgram = "CrossFit";


$.ajax({
    url: 'https://app.wodify.com/API/WODs_v1.aspx',
    data: { 
        apiKey: apiKey,
        location: wodLocation,
        program: wodProgram,
        type: "json"
    },
    dataType: "json",
    success: function(data){
      console.log(data)
    },
    error: function(data) {
        console.log(data)
    }
});

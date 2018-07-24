 document.addEventListener("DOMContentLoaded", function() {
          var elements = document.getElementsByClassName("nama");
          for (var i = 0; i < elements.length; i++) {
              elements[i].oninvalid = function(e) {
                  e.target.setCustomValidity("");
                  if (!e.target.validity.valid) {
                      e.target.setCustomValidity("Nama Pemain wajib diisi!");
                  }
              };
              elements[i].oninput = function(e) {
                  e.target.setCustomValidity("");
              }; 
          }
          var elements = document.getElementsByClassName("sandi");
          for (var i = 0; i < elements.length; i++) {
              elements[i].oninvalid = function(e) {
                  e.target.setCustomValidity("");
                  if (!e.target.validity.valid) {
                      e.target.setCustomValidity("Sandi wajib diisi!");
                  }
              };
              elements[i].oninput = function(e) {
                  e.target.setCustomValidity("");
              }; 
          }
      })
window.onload= function(){
  shortcutListener.init();
}

var SHORTCUTS = {
  'h': function(){ $("#shortcuts-list").fadeIn("slow") },
  'a':{
    'n': function(){window.location = "index.php?option=com_content&task=article.add"},
    'a': function(){window.location = "index.php?option=com_content"},
    'c': function(){window.location = "index.php?option=com_categories&task=category.add&extension=com_content"},
    'm': function(){window.location = "index.php?option=com_categories&extension=com_content"},
    'f': function(){window.location = "index.php?option=com_content&view=featured"},
    'e': function(){window.location = "index.php?option=com_media"}
  },
  'g':{
    'd': function(){window.location = "index.php"},
    'g': function(){window.location = "index.php?option=com_config"},
    'c': function(){window.location = "index.php?option=com_checkin"},
    'i': function(){window.location = "index.php?option=com_admin&view=sysinfo"}
  },
  'u':{
    'u': function(){window.location = "index.php?option=com_users&view=users"},
    'c': function(){window.location = "index.php?option=com_users&task=user.add"},
    'g': function(){window.location = "index.php?option=com_users&view=groups"},
    'l': function(){window.location = "index.php?option=com_users&view=levels"}
  },
  'c':{
    'b': function(){window.location = "index.php?option=com_users&view=users"},
    'c': function(){window.location = "index.php?option=com_users&task=user.add"},
    'm': function(){window.location = "index.php?option=com_users&view=groups"},
    'n': function(){window.location = "index.php?option=com_users&view=levels"},
    'r': function(){window.location = "index.php?option=com_users&view=levels"},
    's': function(){window.location = "index.php?option=com_users&view=levels"},
    'a': function(){window.location = "index.php?option=com_users&view=levels";},
    'w': function(){window.location = "index.php?option=com_users&view=levels"},
    'q': function(){window.location = "index.php?option=com_users&view=levels"},
    'k': function(){window.location = "index.php?option=com_k2"}
  },
  'e':{
    'm': function(){window.location = "index.php?option=com_modules"},
    'p': function(){window.location = "index.php?option=com_plugins"},
    't': function(){window.location = "index.php?option=com_templates";},
    'l': function(){window.location = "index.php?option=com_languages"},
    'i': function(){window.location = "index.php?option=com_installer"}
  }
}

jQuery(function($){
  function hideList(){
    $("#shortcuts-list").fadeOut("slow")
  };
  $("#sc-close-button").click(hideList);
  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      hideList();
    }
  });
});
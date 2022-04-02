module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*/js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        
        colors: {
          'active_blue': '#174C74',
          'side_bg' : '#1B3D5C', 
          'backstage_bg': '#ECF1FF',
          'dot': '#3374AE',
        },
        width:{
          'news-pic' : '120rem',
        },
        height:{
          'login-bg' : '50rem',
        },
        backgroundImage: {
          'contact-us-banner' : "url('/img/picture/index/contact-us-background.jpg')"
        }
      },
      
    },
    plugins: [
      require('flowbite/plugin')
    ],
  }
  
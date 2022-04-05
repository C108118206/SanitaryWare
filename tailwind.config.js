module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*/js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        screens:{
          '3xl' : '1600px',
          // => @media (min_width:1600px) { ... }
          '4xl' : '1800px',
          // => @media (min_width:1900px) { ... }
          '5xl' : '2100px',
          // => @media (min_width:2100px) { ... }
          '6xl' : '2300px',
          // => @media (min_width:2300px) { ... }
          '7xl' : '2500px',
          // => @media (min_width:2500px) { ... }
        },
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
          '104' : '26rem',
          '112' : '28rem',
          '120' : '30rem',
          '128' : '32rem',
          '136' : '34rem',
          '144' : '36rem',
          '152' : '38rem',
          '160' : '40rem',
        },
        backgroundImage: {
          'contact-us-banner' : "url('/img/picture/index/contact-us-background.jpg')",
        }
      },
      
    },
    plugins: [
      require('flowbite/plugin')
    ],
  }
  
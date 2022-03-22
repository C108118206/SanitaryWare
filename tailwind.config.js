module.exports = {
  content: [
    'resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
      colors: {
        'active_blue': '#174C74',
        'side_bg' : '#1B3D5C', 
        'backstage_bg': '#ECF1FF',
      },
      width:{
        'news-pic' : '120rem',
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

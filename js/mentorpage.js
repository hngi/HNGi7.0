
  const wrapper = document.querySelector('.wrapper');
  wrapper.classList.add('wrapper');


  const displayMentors = (data) => {
  let count = 0;
  data.forEach((data) => {
    let wrapperChild = document.createElement('div');
    wrapperChild.classList.add('wrapper-child');
    wrapperChild.style.marginBottom = '4rem';

    let image = document.createElement('img');
    image.classList.add('image');
    image.src = data.imgUrl;
    let heading = document.createElement('h4');
    heading.innerHTML = data.name;

    let paragraph = document.createElement('p');
    paragraph.innerHTML = data.stack;

    let spanOne = document.createElement('span');
    let spanTwo = document.createElement('span');
    let spanThree = document.createElement('span');

    let a1 = document.createElement('a');
    let a2 = document.createElement('a');
    let a3 = document.createElement('a');

    let iconOne = document.createElement('i');
    let iconTwo = document.createElement('i');
    let iconThree = document.createElement('i');

    iconOne.classList.add('fab');
    iconOne.classList.add('fa-twitter');

    iconTwo.classList.add('fab');
    iconTwo.classList.add('fa-facebook-square');

    iconThree.classList.add('fab');
    iconThree.classList.add('fa-dribbble');

    a1.appendChild(iconOne);
    a2.appendChild(iconTwo);
    a3.appendChild(iconThree);

    spanOne.appendChild(a1)
    spanTwo.appendChild(a2)
    spanThree.appendChild(a3)

    a1.setAttribute('href','https://twitter.com')
    a2.setAttribute('href','https://facebook.com')
    a3.setAttribute('href','https://dribbble.com')

    const socialIcons = document.createElement('div');
    socialIcons.classList.add('social-icons');

    socialIcons.appendChild(spanOne);
    socialIcons.appendChild(spanTwo);
    socialIcons.appendChild(spanThree);


    if(count <= 0 || count === 4) {
      spanOne.classList.add('first-color');
      spanTwo.classList.add('first-color');
      spanThree.classList.add('first-color');
      if(count === 4) {
        count = 0;
      }
    } else if(count > 0 && count <= 1) {
      spanOne.classList.add('second-color');
      spanTwo.classList.add('second-color');
      spanThree.classList.add('second-color');
    } else if(count > 1 && count <= 2) {
      spanOne.classList.add('third-color');
      spanTwo.classList.add('third-color');
      spanThree.classList.add('third-color');
    } else if(count > 2 && count <= 3) {
      spanOne.classList.add('fourth-color');
      spanTwo.classList.add('fourth-color');
      spanThree.classList.add('fourth-color');
    }

    wrapperChild.appendChild(image);
    wrapperChild.appendChild(heading);
    wrapperChild.appendChild(paragraph);
    wrapperChild.appendChild(socialIcons);




    wrapper.appendChild(wrapperChild);

    count += 1;

  })
  }


  const mentorsArr = [
    {
      name: "Seyi Onifade",
      stack: "Devops and CEO, HNG Tech",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572796363/Mentors/20191103_165148_auawdc.jpg"
    },
    {
       name: "Ephraim Aigbefo",
       stack: "Fullstack Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709726/Mentors/Ephraim_phd0oq.jpg"
     },
     {
       name: "Onwuora Okechukwu",
       stack: "Fullstack Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709748/Mentors/Okechukwu_mr4ivs.jpg"
     },
     {
       name: "Nedy Udombat",
       stack: "Fullstack Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709768/Mentors/Nedy_ypwx7h.jpg"
     },
     {
       name: "Ominiabohs David",
       stack: "Backend Dev. and Digital Marketing",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709814/Mentors/David_orphejjshasu_ib0liq.jpg"
     },
     {
       name: "Idris Lawal",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709894/Mentors/Idris2_nfne5a.jpg"
     },
     {
       name: "Oluwasomidotun Amujo",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709908/Mentors/Dotun_xaq8p0.jpg"
     },
     {
       name: "Paul Chibiuke Igweze",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709990/Mentors/PorH_h74cio.jpg"
     },
     {
       name: "Kev Chike",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572709955/Mentors/Kev_Chike7_ymlrik.jpg"
     },
     {
       name: "Victor Ugwueze",
       stack: "Backend Development and Devops",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572786926/Mentors/Victor_Ugwueze_qwmfgu.jpg"
     },
     {
       name: "Tobi Anifowose",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710008/Mentors/Tobi_Ani_fby8rf.jpg"
     },
     {
       name: "Elijah Okokon",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710026/Mentors/Elijah_cz1qrz.jpg"
     },
     {
       name: "Chinedu Ebinim",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710042/Mentors/Chinedu_Ebinim_g3phzf.jpg"
     },
     {
       name: "Wisdom Ebong",
       stack: "Backend Development and Devops",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710056/Mentors/Wisdom_kdfvyv.jpg"
     },
     {
       name: "Chigozie Ekwonu",
       stack: "Backend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710070/Mentors/Chigozie_iej3ny.jpg"
     },
     {
       name: "Victor Akintunde",
       stack: "Frontend Development and Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710087/Mentors/Akintunde_vic_tzhhlw.jpg"
     },
     {
       name: "Oghenero Paul-Ejukorlem",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710105/Mentors/Oghene_Paul_nf0ras.jpg"
     },
     {
       name: "Marow Mars",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710122/Mentors/Marow_xsmq2h.jpg"
     },
     {
       name: "Tomisin Lalude",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710145/Mentors/Tomisin_olpwrk.jpg"
     },
     {
       name: "Edmond Ekott",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710158/Mentors/Edmund_bfekba.jpg"
     },
     {
       name: "Motunrayo Adeyemi",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710169/Mentors/Motun_xtjzf1.jpg"
     },
     {
       name: "Samuel Weke",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710186/Mentors/Samuel_weke_w12cdg.jpg"
     },
      {
       name: "Austin Asoluka",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710210/Mentors/Austim_l7cucu.jpg"
     },
     {
       name: "Jimi Bogadeji",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710227/Mentors/Jimi_cz8syf.jpg"
     },
      {
       name: "Onyebinamma Ebuka Peter",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710244/Mentors/Onyebinamma_hq11xg.jpg"
     },
     {
       name: "Jeffrey Ogah",
       stack: "Frontend Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710264/Mentors/Jeff_o8s8y0.jpg"
     },
      {
       name: "Patrick Aziken",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710293/Mentors/Patrick_xjxbfr.jpg"
     },
     {
       name: "Sherif Dauda",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710330/Mentors/Sherif_acatts.jpg"
     },
     {
       name: "Chukwuemeka Iheonye",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710312/Mentors/Iheonye_illbpp.jpg"
     },
     {
       name: "Somto Promise",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710349/Mentors/Promise_3_mjqxkr.jpg"
     },
      {
       name: "Ife Olusola",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710365/Mentors/Ife_axq8kn.jpg"
     },
     {
       name: "Iyabode Atoyebi",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710382/Mentors/Iyabode_srymcv.jpg"
     },
     {
       name: "Oluwatoni Atunrase",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710397/Mentors/Toni_b2twuz.jpg"
     },
     {
       name: "Chiamaka Osumgba",
       stack: "Frontend Development and Devops",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710412/Mentors/Chaimaka_vm3zwx.jpg"
     },
      {
       name: "Tobiloba Williams",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710429/Mentors/Willaims_kygtth.jpg"
     },
     {
       name: "Ovie Paul-Ejukorlem",
       stack: "Design",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710458/Mentors/Ovie_imhvdv.jpg"
     },
     {
       name: "Adolphus Chris",
       stack: "Design and Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710472/Mentors/Adolphus_cpvncb.jpg"
     },
     {
       name: "Kelvin Pere",
       stack: "Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710532/Mentors/Kelvin_cy3aml.jpg"
     },
      {
       name: "Albert Oboh",
       stack: "Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710567/Mentors/Albert_t7aluc.jpg"
     },
     {
       name: "David Ibukun Kuforiji",
       stack: "Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710582/Mentors/Kuforiji_slicer.jpg"
     },
     {
       name: "Frank Arinze",
       stack: "Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710614/Mentors/Frank_rwwqeb.jpg"
     },
     {
       name: "Loveth Nwokike",
       stack: "Mobile Development",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710646/Mentors/Nwokike_kokt2y.jpg"
     },
      {
       name: "Edidiong Ekut",
       stack: "Machine Learning",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710660/Mentors/Edidiong_qnat7x.jpg"
     },
     {
       name: "Munirat Sulaimon",
       stack: "Machine Learning",
       imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710675/Mentors/Munirat_b1rw9s.jpg"
     },
     {
      name: "Izuchukwu Stephen Azubuike",
      stack: "Digital Marketing",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710687/Mentors/Izuchukwy_vxn25q.jpg"
    },
     {
      name: "Oluwaseyi Oluwapelumi",
      stack: "Devops",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710699/Mentors/Oluwaseyi_dgvqdm.jpg"
    },
    {
      name: "Paul Rapuluchukwu",
      stack: "Fullstack Development",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710733/Mentors/Rapulu_h5jg9r.jpg"
    },
    {
      name: "Alexander Garuba",
      stack: "Frontend Development and Design",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572710776/Mentors/Alexander_fyowzc.jpg"
    },
     {
      name: "Jesutomiwa Salam",
      stack: "Backend Development",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572723180/Mentors/Jesutomiwa_su6cnb.jpg"
    },
    {
      name: "Obinna Dennis Okoh",
      stack: "Digital Marketing",
      imgUrl: "https://res.cloudinary.com/memz/image/upload/v1572723192/Mentors/Onions_Dennis_zk7gqz.jpg"
    },
 ];

 displayMentors(mentorsArr);

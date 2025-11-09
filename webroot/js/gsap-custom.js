'use strict';
// Register GSAP
gsap.registerPlugin(ScrollTrigger);

window.addEventListener('load', () => {
  const hereTL = gsap.timeline();

  /* .from('.banner img', {
      yPercent: 100,
      opacity: 0,
      duration: 0.8,
      ease: 'power4.out',
    })
    .from(
      '.overlay',
      {
        opacity: 0,
        duration: 0.5,
      },
      '-=0.8'
    ) */
  hereTL
    .from('.hero-content h1', {
      y: 250,
      duration: 0.8,
      ease: 'power3.out',
    })
    .from(
      '.location',
      {
        y: 30,
        opacity: 0,
        duration: 0.6,
      },
      '-=0.4'
    )
    .from(
      '.lists li',
      {
        y: 90,
        opacity: 0,
        duration: 0.1,
        stagger: 0.2,
        delay: 0.2,
        ease: 'power2.out',
      },
      '-=0.3'
    )
    .from(
      '.hero-content .btn',
      {
        scale: 0.8,
        opacity: 0,
        duration: 0.6,
        delay: 0.8,
        ease: 'back.out(1.7)',
      },
      '-=0.4'
    );
});

const showAnim = gsap
  .from('.gsap-nav', {
    yPercent: -100,
    paused: true,
    duration: 0.2,
    scrollTrigger: {
      start: 'top top',
      end: 'max',
      onUpdate: (self) => {
        self.direction == -1 ? showAnim.play() : showAnim.reverse();
      },
    },
  })
  .progress(1);

const fadeUp = {
  y: 100,
  opacity: 0,
  duration: 0.8,
  stagger: 0.3,
  ease: 'power2.out',
};

const commonScrollTrigger = {
  start: 'top 80%',
  toggleActions: 'play none none reverse',
};

gsap.from('.highlight h3, .highlight h4', {
  ...fadeUp,
  scrollTrigger: {
    trigger: '.highlight',
    ...commonScrollTrigger,
  },
});

gsap.utils.toArray('.highlight__item').forEach((item) => {
  gsap.from(item, {
    ...fadeUp,
    scrollTrigger: {
      trigger: item,
      ...commonScrollTrigger,
      end: 'bottom 80%',
    },
  });
});

gsap.from('.description__img', {
  ...fadeUp,
  scrollTrigger: {
    trigger: '.description__img',
    ...commonScrollTrigger,
  },
});

gsap.utils.toArray('.propertyInfo li').forEach((item) => {
  gsap.from(item, {
    ...fadeUp,
    scrollTrigger: {
      trigger: item,
      ...commonScrollTrigger,
      start: 'top 50%',
      // markers: true,
    },
  });
});

const gallTimeLine = gsap
  .timeline({
    scrollTrigger: {
      trigger: '.img-slide',
      ...commonScrollTrigger,
      // start: 'top -10%',
      start: 'top 50%',
    },
  })
  .from('.img-slide', {
    ...fadeUp,
  });

import { trigger, state, style, transition, animate, query, group, animateChild } from '@angular/animations';
export const slideInAnimation =
  trigger('routeAnimations', [
    transition('HomePage <=> Dashboard', [
      style({ position: 'relative' }),
      query(':enter, :leave', [
        style({
          position: 'absolute',
          top: 0,
          left: 0,
          width: '100%'
        })
      ]),
      query(':enter', [
        style({ left: '-100%'})
      ]),
      query(':leave', animateChild()),
      group([
        query(':leave', [
          animate('2s ease-out', style({ left: '100%'}))
        ]),
        query(':enter', [
          animate('2s ease-out', style({ left: '0%'}))
        ])
      ]),
      query(':enter', animateChild()),
    ])
  ]);

// // the fade-in/fade-out animation.
// export const simpleAnimation = trigger('simpleFadeAnimation', [

//   // the "in" style determines the "resting" state of the element when it is visible.
//   state('in', style({opacity: 1})),

//   // fade in when created. this could also be written as transition('void => *')
//   transition(':enter', [
//     style({opacity: 0}),
//     animate(600 )
//   ]),

//   // fade out when destroyed. this could also be written as transition('void => *')
//   transition(':leave',
//     animate(600, style({opacity: 0})))
// ])
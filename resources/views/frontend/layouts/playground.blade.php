/* OUTER CONTAINER */
.s-wrap {
  width: 100%;
  height: 200px; /* Optional */
  background: #ffd7d1;
  border: 1px solid #9c1e0b;
  overflow: hidden; /* Hide scrollbars */
}

/* MIDDLE WRAPPER */
.s-move {
  display: flex;
  position: relative;
  top: 0;
  right: 0;
}

/* SLIDES */
.xslidetx {
  box-sizing: border-box;
  padding: 10px;
  /* Force all slides to layout horizontally */
  width: 100%;
  flex-shrink: 0; 
}

/* SLIDE ANIMATION MAGIC */
@keyframes slideh {
  /* Will use keyframes to shift the 5 slides *
  0% { right: 0; }
  20% { right: 100%; }
  40% { right: 200%; }
  60% { right: 300%; }
  80% { right: 400%; }
  100% { right: 0; }*/
  /* BUT the above will be non-stop */
  /* We want short pauses between each slide, so... */
  0% { right: 0; }
  15% { right: 0; }
  20% { right: 100%; }
  35% { right: 100%; }
  40% { right: 200%; }
  55% { right: 200%; }
  60% { right: 300%; }
  75% { right: 300%; }
  80% { right: 400%; }
  95% { right: 400%; }
  100% { right: 0; }
}
.s-move { animation: slideh linear 25s infinite; }
.s-move:hover { animation-play-state: paused; }
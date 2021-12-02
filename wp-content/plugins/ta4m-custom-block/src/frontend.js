import React from 'react';
import ReactDOM from 'react-dom';
import './frontend.scss';

const hostsToUpdate = document.querySelectorAll('.ta4m-frontend-to-update');
hostsToUpdate.forEach((host) => {
  const data = JSON.parse(host.querySelector('pre').innerHTML);
  ReactDOM.render(<PodcastHost {...data} />, host);
});

function PodcastHost(props) {
  return (
    <div class='profile'>
      <div class='uniform'>
        <img src={`images/${props.badgeColor}.png`} />
        <img src='../public/images/red.png' />
      </div>
      <div class='bio'>
        <h3>{props.hostName}</h3>
        <p>{props.bio}</p>
      </div>
      <h1>{props.badgeColor}</h1>
    </div>
  );
}

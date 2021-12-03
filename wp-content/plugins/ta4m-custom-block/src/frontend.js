import React from 'react';
import ReactDOM from 'react-dom';
import './frontend.scss';
import blueShirt from './images/blue.png';
import redShirt from './images/red.png';
import yellowShirt from './images/yellow.png';

const shirts = {
  red: redShirt,
  blue: blueShirt,
  yellow: yellowShirt
};

const hostsToUpdate = document.querySelectorAll('.ta4m-frontend-to-update');
hostsToUpdate.forEach((host) => {
  const data = JSON.parse(host.querySelector('pre').innerHTML);
  ReactDOM.render(<PodcastHost {...data} />, host);
});

function PodcastHost(props) {
  return (
    <div className='profile'>
      <div className='uniform'>
        <img src={shirts[props.badgeColor]} />
      </div>
      <div className='bio'>
        <h3>{props.hostName}</h3>
        <p className='spacious-text'>{props.bio}</p>
      </div>
    </div>
  );
}

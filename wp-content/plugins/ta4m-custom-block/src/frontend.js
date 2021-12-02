import React from 'react';
import ReactDOM from 'react-dom';
import './frontend.scss';

const hostsToUpdate = document.querySelectorAll('.ta4m-frontend-to-update');
hostsToUpdate.forEach((host) => ReactDOM.render(<PodcastHost />, host));

function PodcastHost(props) {
  return <h1>hello</h1>;
}

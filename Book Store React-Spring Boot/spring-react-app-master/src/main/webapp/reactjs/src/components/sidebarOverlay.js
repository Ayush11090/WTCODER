import React from 'react';

const SidebarOverlay = ({ isOpen, onClick }) => {
  const overlayStyle = {
    position: 'fixed',
    top: 0,
    left: 0,
    width: '100%',
    height: '100%',
    backgroundColor: 'rgba(0, 0, 0, 0)', // Semi-transparent black overlay
    display: isOpen ? 'block' : 'none',
  };

  return (
    <div style={overlayStyle} onClick={onClick}></div>
  );
};

export default SidebarOverlay;

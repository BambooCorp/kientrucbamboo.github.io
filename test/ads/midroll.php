<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<VAST version="3.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="vast3_draft.xsd">
  <Ad id="midroll">
    <InLine>
      <AdSystem version="2.0">Dynamic VAST</AdSystem>
      <AdTitle>Dynamic VAST Tag</AdTitle>
      <!-- <Error>./ads/pixel.gif</Error>
      <Impression>./ads/pixel.gif</Impression> -->
      <Creatives>
        <Creative>
          <Linear skipoffset="01:00:00">
            <!-- <Duration>00:00:10</Duration>
            <TrackingEvents>
              <Tracking event="start">./ads/pixel.gif</Tracking>
              <Tracking event="firstQuartile">./ads/pixel.gif</Tracking>
              <Tracking event="midpoint">./ads/pixel.gif</Tracking>
              <Tracking event="thirdQuartile">./ads/pixel.gif</Tracking>
              <Tracking event="complete">./ads/pixel.gif</Tracking>
              <Tracking event="pause">./ads/pixel.gif</Tracking>
              <Tracking event="mute">./ads/pixel.gif</Tracking>
              <Tracking event="fullscreen">./ads/pixel.gif</Tracking>
            </TrackingEvents>
            <VideoClicks>
              <ClickThrough><![CDATA[https://www.google.com]]></ClickThrough>
              <ClickTracking>./ads/pixel.gif</ClickTracking>
            </VideoClicks> -->
            <MediaFiles>
              <MediaFile id="1" delivery="progressive" type="application/x-mpegURL" bitrate="400" width="640" height="360">
                <?php
                    echo !empty($_GET['media']) ? $_GET['media'] : '';
                ?>
              </MediaFile>
            </MediaFiles>
          </Linear>
        </Creative>
      </Creatives>
    </InLine>
  </Ad>
</VAST>
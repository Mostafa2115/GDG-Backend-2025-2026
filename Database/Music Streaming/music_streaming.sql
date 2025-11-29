CREATE DATABASE music_streaming;
USE music_streaming;
CREATE TABLE users (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(320) NOT NULL UNIQUE,
  display_name VARCHAR(150),
  date_of_birth DATE,
  status VARCHAR(20) NOT NULL DEFAULT 'active',
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE artists (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  bio TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
);
CREATE TABLE songs (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  artist_id BIGINT NOT NULL,
  title VARCHAR(300) NOT NULL,
  album VARCHAR(300),
  duration_seconds INT NOT NULL CHECK (duration_seconds > 0),
  release_date DATE,
  is_explicit BOOLEAN DEFAULT FALSE,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  FOREIGN KEY (artist_id) REFERENCES artists(id) ON DELETE RESTRICT ON UPDATE CASCADE
);
CREATE TABLE playlists (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  user_id BIGINT NOT NULL,
  name VARCHAR(200) NOT NULL,
  description TEXT,
  is_public BOOLEAN DEFAULT FALSE,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
  UNIQUE (user_id, name)
);
CREATE TABLE playlist_songs (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  playlist_id BIGINT NOT NULL,
  song_id BIGINT NOT NULL,
  position INT NOT NULL CHECK (position >= 1),
  added_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  FOREIGN KEY (playlist_id) REFERENCES playlists(id) ON DELETE CASCADE,
  FOREIGN KEY (song_id) REFERENCES songs(id) ON DELETE RESTRICT,
  UNIQUE (playlist_id, song_id),
  UNIQUE (playlist_id, position)
);
CREATE TABLE favorites (
  user_id BIGINT NOT NULL,
  song_id BIGINT NOT NULL,
  favorited_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  PRIMARY KEY (user_id, song_id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (song_id) REFERENCES songs(id) ON DELETE RESTRICT
);
CREATE TABLE follows (
  user_id BIGINT NOT NULL,
  artist_id BIGINT NOT NULL,
  followed_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  PRIMARY KEY (user_id, artist_id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (artist_id) REFERENCES artists(id) ON DELETE RESTRICT
);
CREATE INDEX idx_songs_artist ON songs (artist_id);
CREATE INDEX idx_songs_title ON songs (title);
CREATE INDEX idx_playlists_user ON playlists (user_id);
CREATE INDEX idx_playlist_songs_song ON playlist_songs (song_id);
